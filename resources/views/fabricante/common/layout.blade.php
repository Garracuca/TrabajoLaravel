@include('book.common.header')
@yield('titulosec')
 @section('principal')
 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eum, debitis beatae est possimus inventore necessitatibus ipsam perspiciatis sunt recusandae quo laboriosam. Et obcaecati provident sit eos, reprehenderit dolores similique!
 @show

 @section('secundaria')
 <h4>Culo de mono</h4>
 @show
 @yield('resumen','En resumen ya tal')
 @include('book.common.footer')