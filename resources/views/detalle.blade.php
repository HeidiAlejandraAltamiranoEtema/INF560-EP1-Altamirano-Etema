<x-layout title="{{ $libro['titulo'] ?? 'Libro no encontrado' }}">
    <!-- Botón Volver al Catálogo -->
    <div class="mb-6">
        <a href="{{ route('catalogo') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-slate-900 transition">
            ← Volver al Catálogo
        </a>
    </div>

    @if ($libro)
        <!-- Tarjeta de Detalle Principal -->
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <!-- Columna Izquierda: Banner / Portada -->
                <div class="md:col-span-5 bg-gradient-to-br {{ $libro['portada'] }} p-8 flex flex-col justify-between items-center text-center min-h-[280px]">
                    <div class="w-full flex justify-between items-center text-xs font-semibold text-white/90">
                        <span>ID #{{ $libro['id'] }}</span>
                        @if ($libro['destacado'])
                            <span class="bg-amber-400 text-slate-950 px-2 py-0.5 rounded font-bold">
                                ★ Destacado
                            </span>
                        @endif
                    </div>

                    <div class="my-auto py-6">
                        <span class="text-xs uppercase tracking-widest text-white/80 font-bold block mb-2">
                            {{ $libro['categoria'] }}
                        </span>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-white drop-shadow">
                            {{ $libro['titulo'] }}
                        </h1>
                        <p class="text-white/90 text-sm mt-2 font-medium">
                            {{ $libro['autor'] }}
                        </p>
                    </div>

                    <div class="text-white/70 text-xs">
                        Publicado en {{ $libro['anio'] }}
                    </div>
                </div>

                <!-- Columna Derecha: Información y Acciones -->
                <div class="md:col-span-7 p-6 sm:p-8 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
                            <div>
                                <span class="text-xs text-slate-400 block uppercase font-bold">Precio actual</span>
                                <span class="text-3xl font-black text-slate-900">
                                    Bs. {{ number_format($libro['precio'], 2) }}
                                </span>
                            </div>

                            <!-- Estado de Stock -->
                            <div>
                                @if ($libro['stock'] > 0)
                                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 bg-emerald-100/80 px-3 py-1.5 rounded-full border border-emerald-300">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                        {{ $libro['stock'] }} en Stock
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-rose-700 bg-rose-100/80 px-3 py-1.5 rounded-full border border-rose-300">
                                        <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                                        Agotado
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Sinopsis -->
                        <div class="mb-6">
                            <h2 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Sinopsis</h2>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $libro['sinopsis'] }}
                            </p>
                        </div>

                        <!-- Ficha Técnica rápida -->
                        <div class="grid grid-cols-2 gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100 text-xs">
                            <div>
                                <span class="text-slate-400 block font-medium">Categoría</span>
                                <span class="font-bold text-slate-700">{{ $libro['categoria'] }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block font-medium">Año de publicación</span>
                                <span class="font-bold text-slate-700">{{ $libro['anio'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="mt-8 pt-4 border-t border-slate-100 flex gap-3">
                        @if ($libro['stock'] > 0)
                            <button class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-4 rounded-xl transition shadow">
                                Comprar Ahora
                            </button>
                        @else
                            <button disabled class="w-full bg-slate-200 text-slate-400 font-bold py-3 px-4 rounded-xl cursor-not-allowed">
                                Producto Agotado
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- Alerta cuando el libro con el ID solicitado no existe -->
        <div class="max-w-md mx-auto text-center py-12 bg-white rounded-2xl shadow-md border border-slate-200 p-8">
            <div class="text-4xl mb-4">🔍</div>
            <h2 class="text-xl font-bold text-slate-800 mb-2">Libro no encontrado</h2>
            <p class="text-slate-500 text-sm mb-6">
                El libro con ID <code class="bg-slate-100 px-1.5 py-0.5 rounded text-amber-600 font-bold">#{{ $id }}</code> no existe en nuestro catálogo actual.
            </p>
            <a href="{{ route('catalogo') }}" class="inline-block bg-slate-900 hover:bg-slate-800 text-white text-sm font-bold px-5 py-2.5 rounded-lg transition">
                Ir al Catálogo
            </a>
        </div>
    @endif
</x-layout>