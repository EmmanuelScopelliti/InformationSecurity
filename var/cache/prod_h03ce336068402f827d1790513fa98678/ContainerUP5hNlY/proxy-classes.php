<?php

namespace ContainerUP5hNlY;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'bulk', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'clearScroll', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'closePointInTime', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'count', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'create', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'delete', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'deleteByQuery', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'deleteScript', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'exists', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'existsSource', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'explain', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'fieldCaps', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'get', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getScript', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getScriptContext', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getScriptLanguages', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getSource', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'index', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'info', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'mget', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'msearch', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'msearchTemplate', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'mtermvectors', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'openPointInTime', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ping', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'putScript', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'rankEval', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'reindex', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'reindexRethrottle', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'renderSearchTemplate', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'scroll', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'search', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'searchMvt', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'searchShards', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'searchTemplate', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'termsEnum', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'termvectors', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'update', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'updateByQuery', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'asyncSearch', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'autoscaling', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'cat', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ccr', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'cluster', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'danglingIndices', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'dataFrameTransformDeprecated', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'enrich', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'eql', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'features', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'fleet', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'graph', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ilm', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'indices', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ingest', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'license', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'logstash', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'migration', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ml', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'monitoring', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'nodes', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'rollup', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'searchableSnapshots', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'security', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'shutdown', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'slm', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'snapshot', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'sql', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'ssl', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'tasks', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'textStructure', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'transform', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'watcher', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'xpack', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolderf723c->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return ($this->valueHolderf723c->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return isset($this->valueHolderf723c->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            unset($this->valueHolderf723c->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->remove($pluginComposerName, $pluginName);
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
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolderf723c->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getLanguageByContext', array('context' => $context), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->updateStoreToken($context, $accessToken);
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
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->userRepository, $instance->trackingEventClient);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'createHookablesFor', array('event' => $event), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolderf723c->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
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
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'add', array('snippetFile' => $snippetFile), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'get', array('key' => $key), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getByName', array('key' => $key), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'toArray', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getIsoList', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getApiAlias', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'set', array('key' => $key, 'element' => $element), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'clear', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->clear();
return;
    }
    #[\ReturnTypeWillChange]
    public function count() : int
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'count', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->count();
    }
    public function getKeys() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getKeys', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'has', array('key' => $key), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'map', array('closure' => $closure), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'fmap', array('closure' => $closure), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'sort', array('closure' => $closure), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'filterInstance', array('class' => $class), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'filter', array('closure' => $closure), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getElements', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getElements();
    }
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'jsonSerialize', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->jsonSerialize();
    }
    public function first()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'first', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->first();
    }
    public function getAt(int $position)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getAt', array('position' => $position), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getAt($position);
    }
    public function last()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'last', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->last();
    }
    public function remove($key) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'remove', array('key' => $key), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->remove($key);
return;
    }
    #[\ReturnTypeWillChange]
    public function getIterator() : \Generator
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getIterator', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'assign', array('options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'addExtensions', array('extensions' => $extensions), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getExtension', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'hasExtension', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getExtensions', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'setExtensions', array('extensions' => $extensions), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'removeExtension', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getVars', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolderf723c->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
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
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'setTwig', array('twig' => $twig), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'setContainer', array('container' => $container), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->setContainer($container);
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
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolderf723c->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
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
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
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
    private $valueHolderf723c = null;
    private $initializer82c9f = null;
    private static $publicProperties0cd27 = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'send', array('request' => $request, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'sendRequest', array('request' => $request), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getConfig', array('option' => $option), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return $this->valueHolderf723c->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializer82c9f = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolderf723c) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolderf723c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolderf723c->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__get', ['name' => $name], $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        if (isset(self::$publicProperties0cd27[$name])) {
            return $this->valueHolderf723c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
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
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__isset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__unset', array('name' => $name), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf723c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf723c;
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
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__clone', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        $this->valueHolderf723c = clone $this->valueHolderf723c;
    }
    public function __sleep()
    {
        $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, '__sleep', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
        return array('valueHolderf723c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82c9f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82c9f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer82c9f && ($this->initializer82c9f->__invoke($valueHolderf723c, $this, 'initializeProxy', array(), $this->initializer82c9f) || 1) && $this->valueHolderf723c = $valueHolderf723c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf723c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf723c;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
