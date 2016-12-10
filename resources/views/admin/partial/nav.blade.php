<!-- === MENU === -->
<input type="checkbox" id="control-nav" /> <!-- MENU MOBILE -->
<label for="control-nav" class="control-nav"></label> <!-- MENU MOBILE -->
<label for="control-nav" class="control-nav-close"></label> <!-- MENU MOBILE -->

<nav id="menu">
  <ul>
    <li class="inicio ativo">
      <a href="" title="Início" accesskey="1"> Início</a>
    </li>
    <li class="coworkers">
      <a href="{{ route('web.clientes.index') }}" title="clientes" accesskey="4"> Clientes</a>
    </li>
    <li class="checkin_out">
      <a href="{{ route('web.check.index') }}" title="Check-In/Out" accesskey="2"> Check-In/Out</a>
    </li>
    <li class="reserva_salas">
      <a href="" title="Reservar Salas" accesskey="3"> Reserva de Salas</a>
    </li>
    <li class="impressoes">
      <a href="#" title="Impressões" accesskey="4"> Impressões</a>
    </li>
    <li class="ocultar">
      <a href="" title="Mensagens" class="icone-email" accesskey="4"> Mensagens</a>
    </li>
    <li class="ocultar">
      <a href="" title="Minha Conta" class="icone-configuracao" accesskey="5"> Minha Conta</a>
    </li>
    <li class="ocultar">
      <a href="{{ route('admin.auth.logout') }}" title="Sair" class="icone-ligar-desligar" accesskey="6"> Sair</a>
    </li>
  </ul>
</nav>
<!-- fim nav#MENU -->


<!-- === MENU RAPIDO === -->
<nav id="menu_rapido">
  <ul>
    <li>
      <a href="" title="Mensagens" class="icone-email" accesskey="4"><span>Mensagens</span><i>1</i></a>
    </li>
    <li>
      <a href="" title="Minha Conta" class="icone-configuracao" accesskey="5"><span>Minha Conta</span></a>
    </li>
    <li>
      <a href="{{ route('admin.auth.logout') }}" title="Sair" class="icone-ligar-desligar" accesskey="6"><span>Sair</span></a>
    </li>
  </ul>
</nav>
          <!-- fim nav#MENU RAPIDO -->