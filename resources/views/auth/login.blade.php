import { Head } from '@inertiajs/react';
import { useForm } from 'react-hook-form';

export default function Login() {
    const { register, handleSubmit } = useForm();

    const onSubmit = (data) => {
        // Lógica para manejar el inicio de sesión
    };

    return (
        <div>
            <Head title="Iniciar sesión" />

            <form onSubmit={handleSubmit(onSubmit)}>
                <h1>Iniciar sesión</h1>

                <input
                    type="email"
                    placeholder="Correo electrónico"
                    {...register('email')}
                    required
                />

                <input
                    type="password"
                    placeholder="Contraseña"
                    {...register('password')}
                    required
                />

                <button type="submit">Iniciar sesión</button>
            </form>

            <p>
                ¿No tienes una cuenta? <a href="/register">Crear cuenta</a>
            </p>
        </div>
    );
}
