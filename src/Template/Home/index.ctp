<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
		<?= $this->Form->control('username') ?>
		<?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Log In')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?php
        	echo $this->Form->control('fullname', ['required'=>true]);
            echo $this->Form->control('username', ['required'=>true]);
            echo $this->Form->control('password', ['required'=>true]);
            echo $this->Form->control('confirmpassword',['label'=>'Confirm Password', 'required'=>true]);
            echo $this->Form->control('email', ['required'=>true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Register')) ?>
    <?= $this->Form->end() ?>
</div>
