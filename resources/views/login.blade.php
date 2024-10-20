<x-layout>
    <form method="post" action="{{ route('user.login') }}">
        @csrf
        <div class="form">
            <h1>Вход</h1>
            <input type="text" name="email" placeholder="Почта">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit" name="submit">Войти</button>
            <a href="{{ route('register') }}">Регистрация</a>
        </div>
    </form>
</x-layout>