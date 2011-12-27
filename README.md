
If you're downloading this bundle, don't forget to:     
========================

### Register the bundle in [app/AppKernel.php]
--------------------------------

new kurtfunai\WalkthroughBundle\kurtfunaiWalkthroughBundle(),

###Add the custom routing information to [app/config/routing.yml]
--------------------------------

kurtfunaiWalkthroughBundle:
    resource: "@kurtfunaiWalkthroughBundle/Resources/config/routing.yml"
    prefix:   /

###Add image/css files to [web/bundles/kurtfunaiwalkthrough/]
--------------------------------

To create a Symlink, run the following commands: (from project root):

    cd web/bundles/
    ln -s ../../src/kurtfunai/WalkthroughBundle/Resources/public/ kurtfunaiwalkthrough

OR 

	Copy/Paste the contents of [src/kurtfunai/WalkthroughBundle/Resources/public/] to [web/bundles/kurtfunaiwalkthrough]