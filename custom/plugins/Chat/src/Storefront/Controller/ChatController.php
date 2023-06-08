<?php declare(strict_types=1);

namespace Chat\Storefront\Controller;

use Chat\Core\Content\Chat\ChatEntity;
use GuzzleHttp\Client;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\MultiFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\NotFilter;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use stdClass;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class ChatController extends StorefrontController
{

    /**
     * @var Client
     */
    private Client $client;

    /**
     * @var EntityRepositoryInterface
     */
    private EntityRepositoryInterface $chatRepository;

    /**
     * @var EntityRepositoryInterface
     */
    private EntityRepositoryInterface $userRepository;

    public function __construct(
        EntityRepositoryInterface $chatRepository,
        EntityRepositoryInterface $userRepository
    ) {
        $this->chatRepository = $chatRepository;
        $this->userRepository = $userRepository;
        $this->client = new Client();
    }

    private function getOpenChats($userId, $context)
    {
        $displayChats = [];

        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('userId', $userId));
        $chats = $this->chatRepository->search($criteria, $context->getContext());


        $userChats = [];

        foreach ($chats as $chat) {
            /** @var ChatEntity $chat */
            $chatId = $chat->getId();
            $userChats[] = $this->chatRepository->search(new Criteria([
                new MultiFilter(MultiFilter::CONNECTION_AND, [
                    new EqualsFilter('chatId', $chatId),
                    new NotFilter(NotFilter::CONNECTION_OR, [
                        new EqualsFilter('userId', $userId)
                    ])
                ])
            ]), $context->getContext());
        }

        $chats = array_unique($userChats, SORT_REGULAR);

        foreach ($chats as $chat) {
            /** @var ChatEntity $chat */
            $chatId = $chat->getId();
            $currentChat = new stdClass();
            $currentChat->chatId = $chatId;
            $currentChat->token = $chat->getToken();
            $currentChat->userId = $chat->getUserId();
            $currentChat->username = $this->userRepository->search(new Criteria([
                new EqualsFilter('id', $chat->getUserId())
            ]), $context->getContext())->getEntities()->first()->getUsername();
            $displayChats[] = $currentChat;
        }
        return $displayChats;
    }

    private function getTokensByChatId($chatId, $context)
    {
        $tokens = [];

        $chats = $this->chatRepository->search(new Criteria([
            new EqualsFilter('chatId', $chatId)
        ]), $context->getContext());

        foreach ($chats as $chat) {
            /** @var ChatEntity $chat */
            $tokens[] = $chat->getToken();
        }

        return $tokens;
    }

    private function chatIntersection($userChat, $otherChat)
    {
        $chats = [];
        for ($i = 0; $i < count($userChat); $i++) {
            for ($j = 0; $j < count($otherChat); $j++) {
                if ($userChat[$i]->getId() == $otherChat[$j]->getId()) {
                    $chats[] = $otherChat[$i];
                }
            }
        }
        return $chats;
    }

    /**
     * @Route("/chat", name="frontend.chat.page", methods={"GET"})
     */
    public function showChatPage(Request $request, SalesChannelContext $context): Response
    {
        if (empty($context->getCustomer())) {
            return $this->redirectToRoute('frontend.home.page');
        }

        $userId = $context->getCustomer()->getId();

        $displayChats = $this->getOpenChats($userId, $context);
        $displayChat = null;

        if (!empty($displayChats)){

            // recheck this??

            if ($request->query->has('chatId')) {
                $displayChat = $this->chatRepository->search(new Criteria([
                    new EqualsFilter('id', $request->query->get('chatId'))
                ]), $context->getContext())->getEntities()->first();
            } else if ($request->query->has('userId')) {
                $otherChat = $this->chatRepository->search(new Criteria([
                    new EqualsFilter('userId', $request->query->get('userId'))
                ]), $context->getContext())->getEntities()->first();
                $userChat = $this->chatRepository->search(new Criteria([
                    new EqualsFilter('userId', $userId)
                ]), $context->getContext())->getEntities()->first();


                $intersect = $this->chatIntersection($userChat, $otherChat);

                if (count($intersect) > 0) {
                    $displayChat = $intersect[0];
                } else {
                    $displayChat = new ChatEntity();
                    $displayChat->setUserId($userId);
                    $displayChat->setToken(uniqid());
                    $this->chatRepository->create([$displayChat], $context->getContext());
                }
            }

            $this->client->post('http://89.190.184.32:6666', [
                'json' => [
                    'userTokens' => $this->getTokensByChatId($displayChat->getId(), $context),
                    'chatId' => $displayChat->getToken(),
                ]
            ]);
        }


        return $this->renderStorefront('@Chat/storefront/page/chat.html.twig', [
            'chats' => $displayChats,
            'currentChat' => $displayChat,
            'userId' => $userId
        ]);
    }
}