@extends('admin.templates.app')

@section('content')

<!-- === DASHBOARD BLOCO 01 === -->
<div class="row dashboard_bloco">

  <!-- === MENSAGENS PENDENTES === -->
  <div id="mensagens_pendentes" class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icone">
        <i class="icone-email"></i>
      </span>
      <div class="info-box-conteudo">
        <a href="" title="Mensagens Pendentes">
          <span class="info-box-titulo">Mensagens Pendentes</span>
          <span class="info-box-texto">1</span>
        </a>
      </div>
    </div>
  </div>
  <!-- fim div#MENSAGENS PENDENTES -->

  <!-- === IMPRESSOES PENDENTES === -->
  <div id="impressoes_pendentes" class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icone">
        <i class="icone-impressora"></i>
      </span>
      <div class="info-box-conteudo">
        <a href="" title="Impressões Pendentes">
          <span class="info-box-titulo">Impressões Pendentes</span>
          <span class="info-box-texto">2</span>
        </a>
      </div>
    </div>
  </div>
  <!-- fim div#IMPRESSOES PENDENTES -->

  <!-- === COWORKERS PRESENTES === -->
  <div id="coworkers_presentes" class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icone">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <div class="info-box-conteudo">
        <a href="" title="Coworkers Presentes">
          <span class="info-box-titulo">Coworkers Presentes</span>
          <span class="info-box-texto">12</span>
        </a>
      </div>
    </div>
  </div>
  <!-- fim div#COWORKERS PRESENTES -->

  <!-- === EMPRESAS PRESENTES === -->
  <div id="empresas_presentes" class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icone">
        <i class="glyphicon glyphicon-briefcase"></i>
      </span>
      <div class="info-box-conteudo">
        <a href="" title="Empresas Presentes">
          <span class="info-box-titulo">Empresas Presentes</span>
          <span class="info-box-texto">2</span>
        </a>
      </div>
    </div>
  </div>
  <!-- fim div#EMPRESAS PRESENTES -->

</div>
<!-- fim DASHBOARD BLOCO 01 -->




<!-- === DASHBOARD BLOCO 02 === -->
<div class="row">

  <!-- === RESERVAS DE HOJE === -->
  <div id="reservas_de_hoje" class="col-md-4">
    <div class="box">
      <div class="box-titulo">
        <h3>Reservas de Hoje</h3>
      </div>
      <div class="box-conteudo">
        <div class="box-container">
          <table class="table">
            <tbody>
              <tr>
                <td>08:00 h</td>
                <td>Sala de Reunião</td>
                <td>Bruno Maia</td>
              </tr>
              <tr>
                <td>08:00 h</td>
                <td>Sala de Reunião</td>
                <td>Bruno Maia</td>
              </tr>
              <tr>
                <td>08:00 h</td>
                <td>Sala de Reunião</td>
                <td>Bruno Maia</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer">
        <a href="" title="Ver Todos">Ver Todas as Reservas</a>
      </div>
    </div>
  </div>
  <!-- fim div#RESERVAS DE HOJE -->


  <!-- === ANIVERSARIANTES DO MÊS === -->
  <div id="aniversariantes_do_dia" class="col-md-4">
    <div class="box">
      <div class="box-titulo">
        <h3>Aniversariantes do Mês</h3>
      </div>
      <div class="box-conteudo">
        <div class="box-container">
          <table class="table">
            <tbody>
              <tr>
                <td>26/01</td>
                <td>Bruno Maia</td>
              </tr>
              <tr>
                <td>26/01</td>
                <td>Thiago Lino</td>
              </tr>
              <tr>
                <td>29/01</td>
                <td>Aulus Raffael</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer">
        <a href="" title="Ver Todos">Ver Todos os Aniversariantes</a>
      </div>
    </div>
  </div>
  <!-- fim div#ANIVERSARIANTES DO DIA -->


  <!-- === PRÓXIMOS EVENTOS === -->
  <div id="proximos_eventos" class="col-md-4">
    <div class="box">
      <div class="box-titulo">
        <h3>Próximos Eventos</h3>
      </div>
      <div class="box-conteudo">
        <div class="box-container">
          <table class="table">
            <tbody>
              <tr>
                <td><strong>26/01</strong></td>
                <td><strong>08:00 h</strong></td>
                <td><a href="" title="Saiba mais">Curso sobre algum assunto</a></td>
              </tr>
              <tr>
                <td><strong>10/02</strong></td>
                <td><strong>13:00 h</strong></td>
                <td><a href="" title="Saiba mais">Curso sobre algum assunto</a></td>
              </tr>
              <tr>
                <td><strong>03/04</strong></td>
                <td><strong>10:00 h</strong></td>
                <td><a href="" title="Saiba mais">Curso sobre algum assunto Curso sobre algum assunto</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer">
        <a href="" title="Ver Todos">Ver Todos os Eventos</a>
      </div>
    </div>
  </div>
  <!-- fim div#PRÓXIMOS EVENTOS -->

</div>
<!-- fim DASHBOARD BLOCO 02 -->

@endsection