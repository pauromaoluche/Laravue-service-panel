<template>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <span><font-awesome-icon icon="stopwatch" style="color: blue" /> A vencer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <span><font-awesome-icon icon="stopwatch" style="color: red"/> Vencida</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <span><font-awesome-icon icon="stopwatch" style="color: yellow" /> Em execução</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <span><font-awesome-icon icon="stopwatch" style="color: green" /> Concluida</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <span><font-awesome-icon icon="stopwatch" style="color: gray" /> Fechada sem solução</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Alerts</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Accordion</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-badges.html">
                            <i class="bi bi-circle"></i><span>Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-breadcrumbs.html">
                            <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-buttons.html">
                            <i class="bi bi-circle"></i><span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-cards.html">
                            <i class="bi bi-circle"></i><span>Cards</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="bi bi-circle"></i><span>Carousel</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-list-group.html">
                            <i class="bi bi-circle"></i><span>List group</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-modal.html">
                            <i class="bi bi-circle"></i><span>Modal</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tabs.html">
                            <i class="bi bi-circle"></i><span>Tabs</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="bi bi-circle"></i><span>Pagination</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-progress.html">
                            <i class="bi bi-circle"></i><span>Progress</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-spinners.html">
                            <i class="bi bi-circle"></i><span>Spinners</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips.html">
                            <i class="bi bi-circle"></i><span>Tooltips</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </aside>
<!-- End Sidebar--></template>
<script>


export default {
    name: 'SideBarComponent'
}

</script>
    
<style lang="scss" scoped>
.sidebar {
    position: fixed;
    top: 60px;
    left: 0;
    bottom: 0;
    width: 250px;
    z-index: 996;
    transition: all 0.3s;
    padding: 20px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #aab7cf transparent;
    box-shadow: 0px 0px 20px rgb(1 41 112 / 10%);
    background-color: #fff;

    .sidebar-nav {
        padding: 0;
        margin: 0;
        list-style: none;

        li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .nav-item {
            margin-bottom: 5px;
        }

        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 600;
            color: #4154f1;
            transition: 0.3;
            background: #f6f9ff;
            padding: 10px 15px;
            border-radius: 4px;
        }
    }
}

@media (min-width: 1200px) {
    .toggle-sidebar .sidebar {
        left: -300px;
    }
}
</style>