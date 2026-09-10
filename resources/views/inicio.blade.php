<x-layout title="Inicio">
    <!-- Hero / Bienvenida -->
    <div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white rounded-2xl p-8 mb-10 shadow-lg">
        <h1 class="text-3xl font-extrabold mb-3">¡Bienvenidos a Librería Saber!</h1>
        <p class="text-slate-300 max-w-2xl text-base">
            Descubre nuestra selección de obras literarias y técnicas. Explora los títulos destacados de esta semana o revisa nuestro catálogo completo.
        </p>
        <div class="mt-6">
            <a href="{{ route('catalogo') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-5 py-2.5 rounded-lg transition shadow">
                Ver Catálogo Completo →
            </a>
        </div>
    </div>

    <!-- Sección de Libros Destacados -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Libros Destacados</h2>
        <p class="text-slate-500 text-sm">Nuestra selección especial recomendada</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse ($destacados as $libro)
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-200 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <div class="h-40 bg-gradient-to-br {{ $libro['portada'] }} flex items-center justify-center p-4">
                        <span class="text-white text-xl font-bold text-center drop-shadow">
                            {{ $libro['titulo'] }}
                        </span>
                    </div>
                    <div class="p-5">
                        <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-800 mb-2">
                            {{ $libro['categoria'] }}
                        </span>
                        <h3 class="text-lg font-bold text-slate-900 mb-1 line-clamp-1">{{ $libro['titulo'] }}</h3>
                        <p class="text-sm text-slate-600 mb-2">Por <span class="font-medium text-slate-800">{{ $libro['autor'] }}</span></p>
                        <p class="text-slate-500 text-xs line-clamp-2 mb-4">{{ $libro['sinopsis'] }}</p>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-0 flex items-center justify-between border-t border-slate-100 mt-auto">
                    <span class="text-lg font-extrabold text-slate-900">Bs. {{ number_format($libro['precio'], 2) }}</span>
                    <a href="{{ route('libro.detalle', $libro['id']) }}" class="text-sm font-semibold text-slate-800 hover:text-amber-600 transition">
                        Ver detalle →
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-8 text-slate-500">
                No hay libros destacados disponibles por el momento.
            </div>
        @endforelse
    </div>
</x-layout>