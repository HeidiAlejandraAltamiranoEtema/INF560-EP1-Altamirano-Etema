<x-layout title="Catálogo de Libros">
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-slate-900">Catálogo Completo</h1>
        <p class="text-slate-600 text-sm mt-1">Explora nuestra colección disponible de libros.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($libros as $libro)
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-200 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <div class="h-44 bg-gradient-to-br {{ $libro['portada'] }} flex items-center justify-center p-4 relative">
                        <span class="text-white text-xl font-bold text-center drop-shadow">
                            {{ $libro['titulo'] }}
                        </span>
                        
                        @if ($libro['destacado'])
                            <span class="absolute top-3 right-3 bg-amber-400 text-slate-950 font-bold text-xs px-2 py-0.5 rounded shadow">
                                ★ Destacado
                            </span>
                        @endif
                    </div>

                    <div class="p-5">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                {{ $libro['categoria'] }}
                            </span>
                            <span class="text-xs text-slate-400">
                                Año: {{ $libro['anio'] }}
                            </span>
                        </div>

                        <h2 class="text-lg font-bold text-slate-900 mb-1 line-clamp-1">
                            {{ $libro['titulo'] }}
                        </h2>
                        <p class="text-sm text-slate-600 mb-3">
                            Por <span class="font-medium text-slate-800">{{ $libro['autor'] }}</span>
                        </p>

                        <div class="mb-2">
                            @if ($libro['stock'] > 0)
                                <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2.5 py-1 rounded-md">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    En Stock ({{ $libro['stock'] }} disponibles)
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-rose-700 bg-rose-50 border border-rose-200 px-2.5 py-1 rounded-md">
                                    <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                                    Agotado
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-3 flex items-center justify-between border-t border-slate-100 mt-auto bg-slate-50/50">
                    <div>
                        <span class="text-xs text-slate-500 block">Precio</span>
                        <span class="text-lg font-extrabold text-slate-900">Bs. {{ number_format($libro['precio'], 2) }}</span>
                    </div>

                    <a href="{{ route('libro.detalle', $libro['id']) }}" class="bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold px-3.5 py-2 rounded-lg transition shadow-sm">
                        Ver Detalle
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12 text-slate-500">
                No hay libros registrados en el catálogo.
            </div>
        @endforelse
    </div>
</x-layout>