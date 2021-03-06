<?php
class Mage_Command_BuiltIn_Lock
    extends Mage_Command_CommandAbstract
    implements Mage_Command_RequiresEnvironment
{
    public function run()
    {
        $lockFile = '.mage/' . $this->getConfig()->getEnvironment() . '.lock';
        file_put_contents($lockFile, 'Locked environment at date: ' . date('Y-m-d H:i:s'));

        Mage_Console::output('Locked deployment to <light_purple>' . $this->getConfig()->getEnvironment() . '</light_purple> environment', 1, 2);
    }

}