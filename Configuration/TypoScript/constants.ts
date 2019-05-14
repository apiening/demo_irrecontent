
plugin.tx_demoirrecontent_list {
    view {
        # cat=plugin.tx_demoirrecontent_list/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:demo_irrecontent/Resources/Private/Templates/
        # cat=plugin.tx_demoirrecontent_list/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:demo_irrecontent/Resources/Private/Partials/
        # cat=plugin.tx_demoirrecontent_list/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:demo_irrecontent/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_demoirrecontent_list//a; type=string; label=Default storage PID
        storagePid =
    }
}
