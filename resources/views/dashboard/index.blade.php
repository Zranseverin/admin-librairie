@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Tableau de bord')

@section('content')
    <section class="stats-grid" aria-label="Indicateurs du tableau de bord">
        <article class="stat-card blue">
            <div class="stat-icon blue">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                </svg>
            </div>
            <div class="stat-value">12</div>
            <div class="stat-label">Livres au catalogue</div>
            <div class="stat-delta up">+2 ce mois</div>
        </article>

        <article class="stat-card amber">
            <div class="stat-icon amber">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <path d="M16 10a4 4 0 0 1-8 0"/>
                </svg>
            </div>
            <div class="stat-value">48</div>
            <div class="stat-label">Commandes</div>
            <div class="stat-delta up">+18% cette semaine</div>
        </article>

        <article class="stat-card green">
            <div class="stat-icon green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <div class="stat-value">842 000 FCFA</div>
            <div class="stat-label">Chiffre d'affaires</div>
            <div class="stat-delta up">+12% ce mois</div>
        </article>

        <article class="stat-card purple">
            <div class="stat-icon purple">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 3v18h18"/>
                    <path d="M19 9l-5 5-4-4-3 3"/>
                </svg>
            </div>
            <div class="stat-value">3 842</div>
            <div class="stat-label">Visites boutique</div>
            <div class="stat-delta down">-4% aujourd'hui</div>
        </article>
    </section>

    <section class="dashboard-grid">
        <article class="card">
            <div class="card-header">
                <h2 class="card-title">Ventes des 7 derniers jours</h2>
                <button class="btn btn-ghost btn-sm" type="button">Exporter</button>
            </div>
            <div class="card-body">
                <div class="mini-chart" aria-label="Graphique des ventes">
                    <span class="bar" style="height: 42%"></span>
                    <span class="bar" style="height: 72%"></span>
                    <span class="bar" style="height: 54%"></span>
                    <span class="bar" style="height: 88%"></span>
                    <span class="bar" style="height: 66%"></span>
                    <span class="bar" style="height: 100%"></span>
                    <span class="bar" style="height: 58%"></span>
                </div>
            </div>
        </article>

        <article class="card">
            <div class="card-header">
                <h2 class="card-title">Formats vendus</h2>
            </div>
            <div class="card-body">
                <div class="donut-wrap">
                    <div class="donut" aria-hidden="true"></div>
                    <div class="donut-legend">
                        <span class="legend-item"><span class="legend-dot" style="background: var(--amber)"></span>Poche 42%</span>
                        <span class="legend-item"><span class="legend-dot" style="background: var(--blue)"></span>Broché 26%</span>
                        <span class="legend-item"><span class="legend-dot" style="background: var(--green)"></span>Ebook 19%</span>
                        <span class="legend-item"><span class="legend-dot" style="background: var(--purple)"></span>Audio 13%</span>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="dashboard-grid">
        <article class="card">
            <div class="card-header">
                <h2 class="card-title">Catalogue récent</h2>
                <a class="btn btn-ghost btn-sm" href="#">Tout voir</a>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Livre</th>
                            <th>Format</th>
                            <th>Stock</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="book-cell">
                                    <span class="book-cover" style="background: linear-gradient(145deg, #2A5F8E, #1A3A5C)"></span>
                                    <span>
                                        <span class="book-title">Dune</span>
                                        <span class="book-author">Frank Herbert</span>
                                    </span>
                                </div>
                            </td>
                            <td><span class="badge badge-format">Poche</span></td>
                            <td><span class="badge badge-stock">En stock</span></td>
                            <td>6 250 FCFA</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-cell">
                                    <span class="book-cover" style="background: linear-gradient(145deg, #7C2D12, #431407)"></span>
                                    <span>
                                        <span class="book-title">1984</span>
                                        <span class="book-author">George Orwell</span>
                                    </span>
                                </div>
                            </td>
                            <td><span class="badge badge-format">Broché</span></td>
                            <td><span class="badge badge-low">Stock bas</span></td>
                            <td>5 850 FCFA</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-cell">
                                    <span class="book-cover" style="background: linear-gradient(145deg, #2E6B3E, #16351E)"></span>
                                    <span>
                                        <span class="book-title">Sapiens</span>
                                        <span class="book-author">Yuval Noah Harari</span>
                                    </span>
                                </div>
                            </td>
                            <td><span class="badge badge-format">Ebook</span></td>
                            <td><span class="badge badge-stock">En stock</span></td>
                            <td>8 500 FCFA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <article class="card">
            <div class="card-header">
                <h2 class="card-title">Activité récente</h2>
            </div>
            <div class="card-body">
                <div class="activity-item">
                    <div class="activity-icon" style="background: var(--green-bg); color: var(--green);">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </div>
                    <div class="activity-text"><strong>Commande #1048</strong> confirmée</div>
                    <div class="activity-time">12 min</div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon" style="background: var(--blue-bg); color: var(--blue);">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14"/>
                            <path d="M5 12h14"/>
                        </svg>
                    </div>
                    <div class="activity-text"><strong>Le Petit Prince</strong> ajouté au catalogue</div>
                    <div class="activity-time">1 h</div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon" style="background: var(--red-bg); color: var(--red);">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                            <line x1="12" y1="9" x2="12" y2="13"/>
                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                        </svg>
                    </div>
                    <div class="activity-text"><strong>1984</strong> nécessite un réassort</div>
                    <div class="activity-time">3 h</div>
                </div>
            </div>
        </article>
    </section>
@endsection
