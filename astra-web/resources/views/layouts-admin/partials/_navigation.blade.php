<nav class="admin-navigation mdl-navigation mdl-color--blue-grey-800">
    <nav-item>
        <a name="posting" class="mdl-navigation__link" href="posting/" data-title="Posting">
            <i class="mdl-color-text--blue-grey-400 material-icons">input</i>
            Posting
        </a>
    </nav-item>
    @if (Auth::user()->access == 1)
        <nav-item>
            <a class="mdl-navigation__link">
                <i class="mdl-color-text--blue-grey-400 material-icons">settings_input_component</i>
                Settings
            </a>
            <sub-nav>
                <sub-nav-item>
                    <a name="fileentry" class="mdl-navigation__link" href="fileentry/" data-title="Files">
                        Files
                    </a>
                </sub-nav-item>
            </sub-nav>
        </nav-item>
    @endif
</nav>