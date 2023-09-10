<?php

namespace Sprint\Migration;


class Version20230904102506 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Agent()->saveAgent(array (
  'MODULE_ID' => 'main',
  'USER_ID' => NULL,
  'SORT' => '0',
  'NAME' => 'accessCleaner();',
  'ACTIVE' => 'Y',
  'NEXT_EXEC' => '05.09.2023 10:20:36',
  'AGENT_INTERVAL' => '86400',
  'IS_PERIOD' => 'N',
  'RETRY_COUNT' => '0',
));
    }

    public function down()
    {
        
        \CAgent::RemoveAgent("accessCleaner();");
    }
}
