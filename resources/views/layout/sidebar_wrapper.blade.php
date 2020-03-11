<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item active  ">
      <a class="nav-link" href="{{ url('/home') }}">
        <i class="material-icons">Tableau de bord</i>
        <p>HOME</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('administrateurs.index') }}">
        <i class="material-icons">person</i>
        <p>Utilisateurs</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('quartiers.index') }}">
        <i class="material-icons">person</i>
        <p>Quartiers</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#">
        <i class="material-icons">person</i>
        <p>Comptables</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#">
        <i class="material-icons">person</i>
        <p>Membres</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('generations.index') }}">
        <i class="material-icons">person</i>
        <p>Générations</p>
      </a>
    </li>
  </ul>
</div>