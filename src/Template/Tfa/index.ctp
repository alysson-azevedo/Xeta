<?php
use Cake\Core\Configure;

?>
<?= $this->element('meta', [
    'title' => __("Two-factor Authentication")
]) ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li>
                    <?= $this->Html->link(__("Home"), '/') ?>
                </li>
                <li>
                    <?= $this->Html->link(__("Users"), ['controller' => 'users', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__("Security"), ['controller' => 'users', 'action' => 'security']) ?>
                </li>
                <li class="active">
                    <?= __("Two-factor Authentication") ?>
                </li>
            </ol>
            <?= $this->Flash->render() ?>
        </div>
    </div>

    <div class="row">
        <section class="col-md-3">
            <?= $this->element('/Users/sidebar') ?>
        </section>

        <section class="col-md-9">
            <div class="terms section">
                <h4>
                    <?= __("Two-factor Authentication") ?>
                </h4>

                <ol>
                    <li>
                        <h5>
                            <?= $this->Html->link(__('About Two-Factor Authentication'), '#about-two-factor-authentication') ?>
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <?= $this->Html->link(__('Application on phone'), '#application-phone') ?>
                        </h5>
                    </li>
                    <li>
                        <h5>
                            <?= $this->Html->link(__('Recovery Code'), '#recovery-code') ?>
                        </h5>
                    </li>
                </ol>

                <div class="space-10"></div>

                <h4 id="about-two-factor-authentication">
                    <?= $this->Html->link('<i class="fa fa-link"></i>', '#about-two-factor-authentication', ['escape' => false]) ?>
                    <?= __('About Two-Factor Authentication') ?>
                </h4>
                <p>
                    <?= __('Two-factor authentication, or 2FA, is a way of logging into websites that requires more than just a password. Using a password to log into a website is susceptible to security threats, because it represents a single piece of information a malicious person needs to acquire. The added security that 2FA provides is requiring additional information to sign in.') ?>
                </p>
                <p>
                    <?= __("In {0}'s case, this additional information is an authentication code delivered to your cell phone that's generated by an application on your smartphone.The only way someone can sign into your account is if they know both your password and have access to the authentication code on your phone.", Configure::read('Site.name')) ?>
                </p>
                <p>
                    <?= __("We <strong>strongly</strong> urge you to turn on 2FA for the safety of your account, not only on {0}, but on other websites that support it.", Configure::read('Site.name')) ?>
                </p>

                <div class="infobox infobox-danger">
                    <?= __("<strong>Warning</strong>: For security reasons, the {0} Support cannot restore access to accounts with two-factor authentication enabled if you lose your phone and don't have access to your recovery code.", Configure::read('Site.name')) ?>
                </div>

                <div class="space-20"></div>

                <h4 id="application-phone">
                    <?= $this->Html->link('<i class="fa fa-link"></i>', '#application-phone', ['escape' => false]) ?>
                    <?= __('Application on phone') ?>
                </h4>
                <p>
                    <?= __('A <em>Time-based One-Time Password</em> (TOTP) application automatically generates an authentication code that changes after a certain period of time.') ?>
                </p>
                <p>
                    <?= __('Download one of these applications :') ?>
                </p>
                <ol>
                    <li>
                        <?= __('For Android, iOS, and Blackberry : {0}', $this->Html->link('Google Authenticator', 'https://support.google.com/accounts/answer/1066447?hl=en', ['target' => '_blank', 'class' => 'text-primary'])) ?>
                    </li>
                    <li>
                        <?= __('For Android and iOS : {0}', $this->Html->link('Duo Mobile', 'https://guide.duosecurity.com/third-party-accounts', ['target' => '_blank', 'class' => 'text-primary'])) ?>
                    </li>
                    <li>
                        <?= __('For Windows Phone : {0}', $this->Html->link('Authenticator', 'https://www.microsoft.com/en-US/store/apps/Authenticator/9WZDNCRFJ3RJ', ['target' => '_blank', 'class' => 'text-primary'])) ?>
                    </li>
                </ol>

                <div class="infobox infobox-primary">
                    <?= __("To configure authentication via TOTP on multiple devices, during setup, scan the QR code using <strong>each device at the same time</strong>. If 2FA is already enabled and you want to add another device, you must re-configure 2FA from your security settings.") ?>
                </div>

                <div class="space-20"></div>

                <h4 id="recovery-code">
                    <?= $this->Html->link('<i class="fa fa-link"></i>', '#recovery-code', ['escape' => false]) ?>
                    <?= __('Recovery Code') ?>
                </h4>
                <p>
                    <?= __("After successfully setting up two-factor authentication via a TOTP mobile application, the {0} page lists your recovery code. We <strong>strongly</strong> recommend saving your recovery code immediately. If you don't, though, you can download them at any point after enabling two-factor authentication.",
                    $this->Html->link(__('Two-factor recovery code'), ['controller' => 'tfa', 'action' => 'recoveryCode'], ['target' => '_blank', 'class' => 'text-primary'])) ?>
                </p>
                <p>
                    <?= __("<strong>Treat your recovery codes with the same level of attention as you would your password!</strong> They should not be shared or distributed. The {0} Staff will never ask you your recovery code.", Configure::read('Site.name')) ?>
                </p>

                <div class="infobox infobox-danger">
                    <?= __("Once you use your recovery code to regain access to your account, <strong>it cannot be reused</strong>. If you've used your recovery code, you must {0}.",
                    $this->Html->link(__('generate a new valid recovery code'), ['controller' => 'tfa', 'action' => 'recoveryCode'], ['target' => '_blank', 'class' => 'text-primary'])) ?>
                </div>

            </div>
        </section>

    </div>
</div>