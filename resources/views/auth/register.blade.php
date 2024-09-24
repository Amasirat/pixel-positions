<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"></x-form.input>
        <x-forms.input label="Email" name="email"></x-form.input>
        <x-forms.input label="Password" name="password" type="password"></x-form.input>
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"></x-form.input>

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer"></x-form.input>
        <x-forms.input label="Logo" name="logo" type="file"></x-form.input>

        <x-forms.button type="submit">Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
