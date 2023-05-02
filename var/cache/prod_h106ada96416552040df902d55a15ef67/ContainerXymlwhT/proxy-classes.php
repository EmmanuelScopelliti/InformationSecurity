<?php

namespace ContainerXymlwhT;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'bulk', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'clearScroll', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'closePointInTime', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'count', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'create', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'delete', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'deleteByQuery', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'deleteScript', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'exists', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'existsSource', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'explain', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'fieldCaps', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'get', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getScript', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getScriptContext', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getScriptLanguages', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getSource', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'index', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'info', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'mget', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'msearch', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'msearchTemplate', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'mtermvectors', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'openPointInTime', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ping', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'putScript', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'rankEval', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'reindex', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'reindexRethrottle', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'renderSearchTemplate', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'scroll', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'search', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'searchMvt', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'searchShards', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'searchTemplate', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'termsEnum', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'termvectors', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'update', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'updateByQuery', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'asyncSearch', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'autoscaling', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'cat', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ccr', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'cluster', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'danglingIndices', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'dataFrameTransformDeprecated', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'enrich', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'eql', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'features', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'fleet', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'graph', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ilm', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'indices', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ingest', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'license', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'logstash', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'migration', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ml', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'monitoring', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'nodes', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'rollup', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'searchableSnapshots', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'security', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'shutdown', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'slm', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'snapshot', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'sql', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'ssl', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'tasks', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'textStructure', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'transform', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'watcher', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'xpack', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolderbc555->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return ($this->valueHolderbc555->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return isset($this->valueHolderbc555->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            unset($this->valueHolderbc555->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->remove($pluginComposerName, $pluginName);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $instance, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($instance);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolderbc555->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getLanguageByContext', array('context' => $context), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->updateStoreToken($context, $accessToken);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->userRepository, $instance->trackingEventClient);
        }, $instance, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($instance);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->userRepository, $instance->trackingEventClient);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'createHookablesFor', array('event' => $event), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolderbc555->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('HookableEventFactory_f62e15e', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactory_f62e15e', 'HookableEventFactory_f62e15e', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';
class SnippetFileCollection_08f09cc extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'add', array('snippetFile' => $snippetFile), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'get', array('key' => $key), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getByName', array('key' => $key), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'toArray', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getIsoList', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getApiAlias', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'set', array('key' => $key, 'element' => $element), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'clear', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->clear();
return;
    }
    public function count() : int
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'count', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->count();
    }
    public function getKeys() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getKeys', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'has', array('key' => $key), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'map', array('closure' => $closure), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'fmap', array('closure' => $closure), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'sort', array('closure' => $closure), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'filterInstance', array('class' => $class), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'filter', array('closure' => $closure), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getElements', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getElements();
    }
    public function jsonSerialize() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'jsonSerialize', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->jsonSerialize();
    }
    public function first()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'first', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->first();
    }
    public function getAt(int $position)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getAt', array('position' => $position), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getAt($position);
    }
    public function last()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'last', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->last();
    }
    public function remove($key) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'remove', array('key' => $key), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->remove($key);
return;
    }
    public function getIterator() : \Generator
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getIterator', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'assign', array('options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'addExtensions', array('extensions' => $extensions), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getExtension', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'hasExtension', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getExtensions', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'setExtensions', array('extensions' => $extensions), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'removeExtension', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getVars', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolderbc555->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('SnippetFileCollection_08f09cc', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollection_08f09cc', 'SnippetFileCollection_08f09cc', false);
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';
class ErrorController_b437ad9 extends \Shopware\Storefront\Controller\ErrorController implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'setTwig', array('twig' => $twig), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'setContainer', array('container' => $container), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->setContainer($container);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->errorTemplateResolver, $instance->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $instance, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($instance);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $instance, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($instance);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolderbc555->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('ErrorController_b437ad9', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorController_b437ad9', 'ErrorController_b437ad9', false);
}

include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
class Client_b190fb5 extends \GuzzleHttp\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc555 = null;
    private $initializer663b3 = null;
    private static $publicProperties91007 = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'send', array('request' => $request, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'sendRequest', array('request' => $request), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getConfig', array('option' => $option), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return $this->valueHolderbc555->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializer663b3 = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolderbc555) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolderbc555 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolderbc555->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__get', ['name' => $name], $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        if (isset(self::$publicProperties91007[$name])) {
            return $this->valueHolderbc555->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__isset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__unset', array('name' => $name), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc555;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc555;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__clone', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        $this->valueHolderbc555 = clone $this->valueHolderbc555;
    }
    public function __sleep()
    {
        $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, '__sleep', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
        return array('valueHolderbc555');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer663b3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer663b3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer663b3 && ($this->initializer663b3->__invoke($valueHolderbc555, $this, 'initializeProxy', array(), $this->initializer663b3) || 1) && $this->valueHolderbc555 = $valueHolderbc555;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc555;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc555;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
