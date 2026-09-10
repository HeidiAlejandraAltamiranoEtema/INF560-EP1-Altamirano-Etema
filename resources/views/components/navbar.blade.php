<header class="bg-slate-900 text-white shadow-md sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="{{ route('inicio') }}" class="font-bold text-xl tracking-wider text-amber-400 hover:text-amber-300 transition">
             Librería Saber
        </a>
        <div class="flex space-x-6 text-sm font-medium">
            <a href="{{ route('inicio') }}" 
               @class([
                   'transition pb-1 border-b-2',
                   'border-amber-400 text-amber-400 font-semibold' => request()->routeIs('inicio'),
                   'border-transparent text-slate-300 hover:text-white hover:border-slate-400' => !request()->routeIs('inicio'),
               ])>
                Inicio
            </a>
            <a href="{{ route('catalogo') }}" 
               @class([
                   'transition pb-1 border-b-2',
                   'border-amber-400 text-amber-400 font-semibold' => request()->routeIs('catalogo') || request()->routeIs('libro.detalle'),
                   'border-transparent text-slate-300 hover:text-white hover:border-slate-400' => !(request()->routeIs('catalogo') || request()->routeIs('libro.detalle')),
               ])>
                Catálogo
            </a>
            <a href="{{ route('nosotros') }}" 
               @class([
                   'transition pb-1 border-b-2',
                   'border-amber-400 text-amber-400 font-semibold' => request()->routeIs('nosotros'),
                   'border-transparent text-slate-300 hover:text-white hover:border-slate-400' => !request()->routeIs('nosotros'),
               ])>
                Nosotros
            </a>
        </div>
    </nav>
</header>