<?php
// Inclui o cabeçalho
include_once __DIR__ . '/../views/partials/header.php';
?>

<div class="page-header d-flex justify-content-between align-items-center">
    <h2 class="page-title">
        <i class="fas fa-hospital me-2"></i>Página Inicial
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-2"></i> Sobre o Hospital
            </div>
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                    <img src="img/hr.jpg" class="img-fluid rounded-circle mb-3 mb-md-0 me-md-4" alt="Hospital da Restauração" style="max-width: 200px; width: 100%; height: auto;">
                    <h3 class="text-center text-md-start mb-0">Bem-vindo ao Hospital da Restauração</h3>
                </div>

                <div class="texto-rolavel p-3" style="max-height: 400px; overflow-y: auto;">
                    <p>Inaugurado em 1967 como Hospital de Pronto-Socorro, somente em 31 de dezembro de 1969, durante o governo Paulo Guerra, em nova inauguração, passou a atender à população pernambucana...</p>
                    <p>O Hospital da Restauração Governador Paulo Guerra é a maior unidade da rede de saúde pública de Pernambuco, com 833 leitos registrados no Ministério da Saúde...</p>
                    <p>Desde junho de 2010, a antiga Emergência foi desmembrada em três, com entradas e espaços distintos...</p>
                    <p>Ao todo, o HR oferta nove especialidades, cujas enfermarias estão distribuídas pelos 8 andares do prédio...</p>
                    <p>O Centro de Tratamento de Queimados (CTQ-HR), referência nacional no atendimento e tratamento de queimaduras...</p>
                    <p>Dentro do setor de Neurologia do HR também funciona o Centro de Referência e Apoio a Pacientes com Doenças Desmielinizantes (Crappdd)...</p>
                    <p>A Emergência Clínica é abrigada no prédio anexo ao principal e atende casos de hemorragia digestiva, intoxicação e AVC...</p>
                    <p>O hospital possui uma grande importância social como centro formador para a saúde de Pernambuco...</p>
                    <p>Em 2005, a unidade foi credenciada pelo Ministério da Educação (MEC) como hospital de ensino...</p>
                    <p>Na área médica, os programas de residência são em 12 especialidades: Anestesiologia; Clínica Médica; Cirurgia Geral...</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <i class="fas fa-stethoscope me-2"></i> Especialidades
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 mb-3">
                                <i class="fas fa-clinic-medical me-2"></i>Ambulatório
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Neurologia</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Neurocirurgia</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Ortopedia/traumatologia</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Cirurgia Vascular</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Cirurgia Geral</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Bucomaxilofacial</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Clínica Médica</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="border-bottom pb-2 mb-3">
                                <i class="fas fa-ambulance me-2"></i>Emergência
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Cirurgia bucomaxilofacial</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Cirurgia Geral</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Cirurgia Vascular</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Clínica Médica</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Clínica Pediátrica</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Intoxicações</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Neurocirurgia</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Neurologia</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Queimaduras</li>
                                <li class="list-group-item"><i class="fas fa-angle-right me-2 text-primary"></i>Traumato-ortopedia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-map-marker-alt me-2"></i>Localização
            </div>
            <div class="card-body">
                <h5 class="card-title mb-3">Informações de Contato</h5>
                <div class="mb-3 d-flex">
                    <i class="fas fa-map-marked-alt me-3 mt-1 text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <h6 class="mb-1">Endereço:</h6>
                        <p>Avenida Agamenon Magalhães, S/N, Derby, Recife – PE</p>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <i class="fas fa-phone-alt me-3 mt-1 text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <h6 class="mb-1">Telefone:</h6>
                        <p>(81) 3181.5400</p>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <i class="fas fa-user-tie me-3 mt-1 text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <h6 class="mb-1">Diretor:</h6>
                        <p>Petrus Moura de Andrade Lima</p>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <i class="fas fa-city me-3 mt-1 text-primary" style="font-size: 1.5rem;"></i>
                    <div>
                        <h6 class="mb-1">Região:</h6>
                        <p>Região Metropolitana do Recife</p>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#mapaCollapse" aria-expanded="false" aria-controls="mapaCollapse">
                        <i class="fas fa-map me-2"></i>Ver no Mapa
                    </button>
                </div>
                <div class="collapse mt-3" id="mapaCollapse">
                    <div class="card card-body p-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.6269874815797!2d-34.89914222411883!3d-8.048620180523463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab19bcdc2f7b65%3A0xb51d1d7c317db843!2sHospital%20da%20Restaura%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1701256542513!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <i class="fas fa-chart-line me-2"></i>Estatísticas
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <h6 class="card-title">Dados Gerais:</h6>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span><i class="fas fa-bed me-2 text-primary"></i>Total de Leitos:</span>
                        <span class="fw-bold">833</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span><i class="fas fa-user-md me-2 text-primary"></i>Profissionais de Saúde:</span>
                        <span class="fw-bold">~ 3.000</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span><i class="fas fa-users me-2 text-primary"></i>Total de Colaboradores:</span>
                        <span class="fw-bold">~ 4.000</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span><i class="fas fa-hospital-user me-2 text-primary"></i>Atendimentos/mês:</span>
                        <span class="fw-bold">~ 6.000</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-procedures me-2 text-primary"></i>Cirurgias/mês:</span>
                        <span class="fw-bold">~ 1.200</span>
                    </div>
                </div>
                <div class="text-center">
                    <a href="dashboard_view.php" class="btn btn-outline-success">
                        <i class="fas fa-chart-bar me-2"></i>Ver Dashboard Completo
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-info text-white">
                <i class="fas fa-bullhorn me-2"></i>Avisos Importantes
            </div>
            <div class="card-body">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>31/03/2025:</strong> Manutenção programada do sistema na próxima semana.
                </div>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>26/03/2025:</strong> Nova versão do sistema disponível.
                </div>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>20/03/2025:</strong> Treinamento concluído com sucesso.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Inclui o rodapé
include_once __DIR__ . '/../views/partials/footer.php';
?>