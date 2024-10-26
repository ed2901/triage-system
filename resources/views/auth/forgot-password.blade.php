<div class="forgot-password-container">
    <h2>¿Olvidaste tu contraseña?</h2>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Correo Electrónico" required autofocus>
        <button type="submit">Enviar enlace de restablecimiento</button>
    </form>
</div>
