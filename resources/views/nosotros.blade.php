<x-layout title="Sobre Nosotros">
    <!-- Header de Sección -->
    <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-xs uppercase font-bold text-amber-600 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
            Conócenos
        </span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-3 mb-4">
            Sobre Librería Saber
        </h1>
        <p class="text-slate-600 text-base leading-relaxed">
            Somos un espacio dedicado a promover la lectura, el aprendizaje y el acceso al conocimiento ofreciendo las mejores obras literarias y técnicas.
        </p>
    </div>

    <!-- Misión y Visión (Grid Responsive) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-200 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-amber-500/10 text-amber-600 rounded-xl flex items-center justify-center text-2xl mb-4 font-bold">
                    🎯
                </div>
                <h2 class="text-xl font-bold text-slate-900 mb-2">Nuestra Misión</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Facilitar el acceso a la literatura y el material educativo de calidad a través de una experiencia de búsqueda ágil, moderna y accesible para todos los lectores.
                </p>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-md border border-slate-200 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-slate-900/10 text-slate-900 rounded-xl flex items-center justify-center text-2xl mb-4 font-bold">
                    🚀
                </div>
                <h2 class="text-xl font-bold text-slate-900 mb-2">Nuestra Visión</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Convertirnos en la plataforma de librería en línea referente a nivel universitario y regional, destacando por nuestro catálogo variado y atención personalizada.
                </p>
            </div>
        </div>
    </div>

    <!-- Ficha de Contacto y Datos Académicos -->
    <div class="bg-slate-900 text-white rounded-2xl p-8 shadow-xl max-w-4xl mx-auto border border-slate-800">
        <h2 class="text-xl font-bold text-amber-400 mb-6 text-center sm:text-left">
            Información del Proyecto Examen
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-sm">
            <div>
                <span class="text-slate-400 text-xs block font-medium uppercase">Materia</span>
                <span class="font-bold text-white text-base">INF560 — Front End</span>
            </div>
            <div>
                <span class="text-slate-400 text-xs block font-medium uppercase">Proyecto</span>
                <span class="font-bold text-white text-base">Librería en Línea</span>
            </div>
            <div>
                <span class="text-slate-400 text-xs block font-medium uppercase">Tecnologías</span>
                <span class="font-bold text-amber-400 text-base">Laravel + Tailwind CSS</span>
            </div>
        </div>
    </div>
</x-layout>