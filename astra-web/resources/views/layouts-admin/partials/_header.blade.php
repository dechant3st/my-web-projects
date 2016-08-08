<header class="admin-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title" id="pan-title">Posting</span>
        <span class="mdl-layout-title" id="title-sep">&nbsp;&gt;&nbsp;</span>
        <span class="mdl-layout-title" id="subtitle"></span>
        <div class="mdl-layout-spacer"></div>
        <div class='ninja'>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                    data-toggle="modal" data-target="#ModalView"
                    id="btnNew">
                <span class="material-icons">add_box</span> New
            </button>
            
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon"
                    for="fixed-header-drawer-exp">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" name="search"
                        id="fixed-header-drawer-exp"
                        onkeyup="DeleteRec(setLink+'list?ok=1&search='+this.value)">
                </div>
            </div>
        </div>
    </div>
</header>