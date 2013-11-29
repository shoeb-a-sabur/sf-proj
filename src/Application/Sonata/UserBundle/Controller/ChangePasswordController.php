<?php

namespace Application\Sonata\UserBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Controller\ChangePasswordController as BaseController;

/**
 * Overriding ChangePasswordController of FOSUserBundle
 *
 * @author Pantheon
 */
class ChangePasswordController extends BaseController {
    /**
     * Generate the redirection url when the resetting is completed. 
     * Overriding here to set the redirect path to SonataUserBundle's profile.
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     *
     * @return string
     */
    protected function getRedirectionUrl(UserInterface $user)
    {
        return $this->container->get('router')->generate('sonata_user_profile_show');
    }
}


