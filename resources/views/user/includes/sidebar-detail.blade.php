<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="/" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img width="80%" src="/template/assets/img/brand/hakka.png" alt="">
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Identitas</span>
    </li>

    <li class="menu-item {{ request()->is('identitas') ? 'active' : '' }}">
      <a href="{{ route('user.identitas') }}" class="menu-link">
        <div data-i18n="Analytics">Identitas Startup</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Soal Indikator</span>
    </li>

    {{-- @foreach ($indikators as $indikator)
      <li
        class="menu-item {{ request()->is('student/course/' . $course->slug . '/' . $topic->slug . '*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <div data-i18n="Form Elements">{{ $topic->title }}</div>
        </a>
        <ul class="menu-sub">
          @foreach ($leason->where('topic_id', $topic->id) as $leasong)
            @if ($leasong->status === 0)
              <li
                class="menu-item {{ request()->is('student/course/' . $course->slug . '/' . $topic->slug . '/' . $leasong->slug) ? 'active open' : '' }}"
                style="position: relative">
                <a class="menu-link">
                  <div data-i18n="Basic Inputs">{{ $leasong['name'] }} lk</div>
                </a>
                <div style="position: absolute; right: 20px; transform: translateY(-50%);" class="top-50">
                  <i class="fa-solid fa-lock text-muted"></i>
                </div>
              </li>
            @else
              <li
                class="menu-item {{ request()->is('student/course/' . $course->slug . '/' . $topic->slug . '/' . $leasong->slug) ? 'active open' : '' }}"
                style="position: relative">
                <a href="{{ route('student.course.detail.leason', [$course->slug, $topic->slug, $leasong->slug]) }}"
                  class="menu-link">
                  <div data-i18n="Basic Inputs">{{ $leasong['name'] }}</div>
                </a>

                @if ($progress->where('leason_id', $leasong->id)->first())
                  @if (
                      $progress->where('leason_id', $leasong->id)->first()->student_id == auth()->user()->id &&
                          $progress->where('leason_id', $leasong->id)->first()->progress == 1 &&
                          $progress->where('leason_id', $leasong->id)->first()->leason_id == $leasong->id)
                    <div style="width: 8px; height: 8px; position: absolute; right: 20px; transform: translateY(-50%);"
                      class="bg-success rounded-pill top-50">
                    </div>
                  @endif
                @endif
              </li>
            @endif
          @endforeach
        </ul>
      </li>
    @endforeach --}}
    @foreach ($indikators as $indikatorId => $indikator)
        <li class="menu-item {{ request()->is('soal/' . $indikator->name) ? 'active' : '' }}">
          <a href="{{ route('user.soal', $indikator->name) }}" class="menu-link">
            <div data-i18n="Analytics">{{ $indikator->name }}</div>
          </a>
        </li>
    @endforeach

  </ul>
</aside>
