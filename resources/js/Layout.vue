<template>
    <div id="app">
        <nav class="navbar bg-dark navbar-expand-lg border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">M.H.M.C</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <Link class="nav-link" href="/">Home</Link>
                        </li>
                        <li class="nav-item dropdown">
                            <Link class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">O Clube</Link>
                            <ul class="dropdown-menu">
                                <li><Link class="dropdown-item" href="#">O Colete</Link></li>
                                <li><Link class="dropdown-item" href="#">O Comando</Link></li>
                                <li><Link class="dropdown-item" href="#">Something else here</Link></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Instagram</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Contato</Link>
                        </li>
                    </ul>
                    <!-- Right aligned links -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center justify-content-end">
                        <li class="btn btn-sm btn-outline-light me-2" @click="">Área restrita</li>
                    </ul>
                </div>
            </div>
        </nav>
        <slot />
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        Link,
    },
}
</script>