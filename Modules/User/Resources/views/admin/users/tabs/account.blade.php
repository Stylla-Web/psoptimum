<div class="row">
    <div class="col-md-8">
        {{ Form::text('first_name', trans('user::attributes.users.first_name'), $errors, $user, ['required' => true]) }}
        {{ Form::text('last_name', trans('user::attributes.users.last_name'), $errors, $user, ['required' => true]) }}
        {{ Form::email('email', trans('user::attributes.users.email'), $errors, $user, ['required' => true]) }}
        {{ Form::text('phone', trans('user::attributes.users.phone'), $errors, $user, ['required' => true]) }}
        {{ Form::select('roles', trans('user::attributes.users.roles'), $errors, $roles, $user, ['multiple' => true, 'required' => true, 'class' => 'selectize prevent-creation']) }}

        @if (request()->routeIs('admin.users.create'))
            {{ Form::password('password', trans('user::attributes.users.password'), $errors, null, ['required' => true]) }}
            {{ Form::password('password_confirmation', trans('user::attributes.users.password_confirmation'), $errors, null, ['required' => true]) }}
        @endif

        @if (request()->routeIs('admin.users.edit'))
            {{ Form::checkbox('activated', trans('user::attributes.users.activated'), trans('user::users.form.activated'), $errors, $user, ['disabled' => $user->id === $currentUser->id, 'checked' => old('activated', $user->isActivated())]) }}
        @endif
    </div>
    @if($user->isReseller() || request()->routeIs('admin.users.create'))
        <div class="m-t-20 col-md-8">
            <h4 class="tab-content-title">Ajustement des prix</h4>
            {{ Form::number('global_marge', trans('user::attributes.global_marge'), $errors, $user, ['min' => 0]) }}
            {{ Form::select('increase_or_decrease', trans('user::attributes.increase_or_decrease'), $errors, trans('user::attributes.select_increase_or_decrease'), $user) }}
        </div>
    @endif
</div>
