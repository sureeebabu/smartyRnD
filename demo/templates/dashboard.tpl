{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=Dashboard}

<div class="row">
    <div class="col-md-8">
        <h1>Dashboard - {$myname}</h1>
    </div>
    <div class="col-md-4">
        <div class="float-right pt-3">
            smarty.version -> {$smarty.version}
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
                {section name=users loop=$users}
                    <tr>
                        <td class="text-center">{$srno + 1 }</td>
                        <td>{$users[users].user_name} </td>
                        <td>{$users[users].user_email} </td>
                    </tr>
                {/section}
            </table>

        </div>

    </div>
</div>

<script>
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
</script>
{include file="footer.tpl"}