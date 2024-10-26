import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <div className="flex items-center">
                    {/* Logo de medicina */}
                    <img src="/images/med_logo.png" alt="Logo de Medicina" className="w-12 h-12 mr-4" />
                    <h2 className="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
                </div>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12 bg-gray-100"> {/* Fondo suave */}
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        {/* Tarjeta para Pacientes */}
                        <div className="bg-white overflow-hidden shadow-lg rounded-lg p-6 border-l-4 border-green-400">
                            <h3 className="text-lg font-medium text-gray-800">Pacientes</h3>
                            <p className="mt-1 text-sm text-gray-600">Gestiona la información de los pacientes.</p>
                            <a href="/pacientes" className="mt-3 inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md shadow-sm text-white text-sm font-medium hover:bg-blue-800">
                                Ver Pacientes
                            </a>
                        </div>

                        {/* Tarjeta para Códigos de Triage */}
                        <div className="bg-white overflow-hidden shadow-lg rounded-lg p-6 border-l-4 border-green-400">
                            <h3 className="text-lg font-medium text-gray-800">Códigos de Triage</h3>
                            <p className="mt-1 text-sm text-gray-600">Consulta y gestiona los códigos de triage.</p>
                            <a href="/codigos-triage" className="mt-3 inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md shadow-sm text-white text-sm font-medium hover:bg-blue-800">
                                Ver Códigos
                            </a>
                        </div>

                        {/* Tarjeta para Reportes */}
                        <div className="bg-white overflow-hidden shadow-lg rounded-lg p-6 border-l-4 border-green-400">
                            <h3 className="text-lg font-medium text-gray-800">Reportes</h3>
                            <p className="mt-1 text-sm text-gray-600">Genera y visualiza reportes de triage.</p>
                            <a href="/reportes" className="mt-3 inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md shadow-sm text-white text-sm font-medium hover:bg-blue-800">
                                Ver Reportes
                            </a>
                        </div>

                        {/* Tarjeta para Configuración */}
                        <div className="bg-white overflow-hidden shadow-lg rounded-lg p-6 border-l-4 border-green-400">
                            <h3 className="text-lg font-medium text-gray-800">Configuración</h3>
                            <p className="mt-1 text-sm text-gray-600">Ajusta la configuración del sistema.</p>
                            <a href="/configuracion" className="mt-3 inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md shadow-sm text-white text-sm font-medium hover:bg-blue-800">
                                Ir a Configuración
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
