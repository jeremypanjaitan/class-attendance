@extends('base')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
    <div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link {{ session('active_tab') == 'nav-buat-absensi-tab' || !session('active_tab') ? 'active' : ''   }}" id="nav-buat-absensi-tab" data-bs-toggle="tab" data-bs-target="#nav-buat-absensi" type="button"
                    role="tab" aria-controls="nav-buat-absensi" aria-selected="true">Buat Absensi</button>
                <button class="nav-link {{ session('active_tab') == 'nav-buat-absensi-tab' ? 'active' : ''   }}" id="nav-validasi-absensi-tab" data-bs-toggle="tab" data-bs-target="#nav-validasi-absensi"
                    type="button" role="tab" aria-controls="nav-validasi-absensi" aria-selected="false">Validasi
                    Absensi</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade {{ session('active_tab') == 'nav-buat-absensi-tab' || !session('active_tab') ? 'show active' : ''   }}" id="nav-buat-absensi" role="tabpanel" aria-labelledby="nav-buat-absensi-tab"
                tabindex="0">
                @include('buat-absensi')
            </div>
            <div class="tab-pane fade {{ session('active_tab') == 'nav-validasi-absensi-tab' ? 'show active' : ''   }}" id="nav-validasi-absensi" role="tabpanel" aria-labelledby="nav-validasi-absensi-tab" tabindex="0">
                @include('validasi-absensi')
            </div>
        </div>
    </div>
@endsection
