<?php


namespace develnext\bundle\jxbrowserwin64dependence;


use ide\bundle\AbstractBundle;
use ide\bundle\AbstractJarBundle;

class JXBrowserWinDependence extends AbstractJarBundle{
    function onAdd(Project $project, AbstractBundle $owner = null){
        parent::onAdd($project, $owner);
    }
    function onRemove(Project $project, AbstractBundle $owner = null){
        parent::onRemove($project, $owner);
    }

    public function onRegister(IdeLibraryBundleResource $resource)
    {
        parent::onRegister($resource);
    }
}
