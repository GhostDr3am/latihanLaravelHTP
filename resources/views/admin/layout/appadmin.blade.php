@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      {{-- Pendeklarasian yang akan di isi konten ketika yieldnya di panggil didalam konten masing masing --}}
      @yield('content')
    </div>
  </main>
</div>



@include('admin.layout.bottom')