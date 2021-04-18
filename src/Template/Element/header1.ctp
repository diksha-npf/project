<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="login">home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <?= $this->Html->link('Posts', '/users/post') ?>
                </li>
                
                <li>
                    <?= $this->Html->link('list users', '/users/list') ?>
                </li>
                 <li>
                    <?= $this->Html->link('logout', '/users/logout') ?>
                </li>
            </ul>
        </div>
    </div>
</nav>