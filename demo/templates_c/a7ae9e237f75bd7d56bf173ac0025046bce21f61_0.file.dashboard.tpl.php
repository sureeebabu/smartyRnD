<?php
/* Smarty version 3.1.36, created on 2020-08-02 10:23:41
  from 'D:\xampp\htdocs\smarty\demo\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f26780d7b1532_22303404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ae9e237f75bd7d56bf173ac0025046bce21f61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\dashboard.tpl',
      1 => 1596356620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f26780d7b1532_22303404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Dashboard'), 0, false);
?>

<div class="row">
    <div class="col-md-8">
        <h1>Dashboard - <?php echo $_smarty_tpl->tpl_vars['myname']->value;?>
</h1>
    </div>
    <div class="col-md-4">
        <div class="float-right pt-3">
            smarty.version -> <?php echo Smarty::SMARTY_VERSION;?>

        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row">
        <div class="col-md-6">
            <form action="#" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" autocomplete="off" id="username" placeholder="Enter Username" name="username" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" autocomplete="off" id="pwd" placeholder="name@example.com" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">User Name</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <?php
$__section_users_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_users_0_total = $__section_users_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_users'] = new Smarty_Variable(array());
if ($__section_users_0_total !== 0) {
for ($__section_users_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_users']->value['index'] = 0; $__section_users_0_iteration <= $__section_users_0_total; $__section_users_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_users']->value['index']++){
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['srno']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_users']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_users']->value['index'] : null)]['user_name'];?>
 </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_users']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_users']->value['index'] : null)]['user_email'];?>
 </td>
                    </tr>
                <?php
}
}
?>
            </table>

        </div>

    </div>
</div>

<?php echo '<script'; ?>
>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
