
<?php include('header.php'); ?>
<div style="width: 30% ; margin: 0 auto;" class="row">
<div class="col-md-12">
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

           <form action="<?php echo base_url() .  uri_string(); ?>" method="POST" class="form-signup">
             
                 
                <input type="text" id="user-name" name="first_name" value="<?php echo $user->first_name; ?>" class="form-control" placeholder="First name" required="" autofocus="">
                <input type="text" id="user-name1" name="last_name" value="<?php echo $user->last_name; ?>" class="form-control" placeholder="Last name" required="" autofocus="">
                <input type="email" id="user-email" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Email address" required autofocus="">
                <input type="text" id="company" name="company" value="<?php echo $user->company; ?>" class="form-control" placeholder="Company name" required autofocus="">
                <input type="text" id="phone" name="phone" value="<?php echo $user->phone; ?>" class="form-control" placeholder="Phone" required autofocus="">
                <input type="password" id="user-pass" name="password" class="form-control" placeholder="Password"   autofocus="">
                <input type="password" id="user-repeatpass" name="password_confirm" class="form-control" placeholder="Repeat Password"   autofocus="">

                      <?php if ($this->ion_auth->is_admin()): ?>

                <h3><?php echo lang('edit_user_groups_heading');?></h3>
              <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

                <input type="hidden" value="<?php echo $user->id; ?>" name="id">

                <?php echo form_hidden($csrf); ?>

                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-user-plus"></i> Save</button>
                
            </form>

</div>
</div>


