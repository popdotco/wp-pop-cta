(function() {
    tinymce.create('tinymce.plugins.pop_cta', {
        init: function(ed, url) {
            ed.addButton('pop_cta', {
                title: 'Add a CTA',
                image: url + '/../img/icon.png',
                onclick: function() {
                     ed.selection.setContent(ed.selection.getContent() + ' [pop_cta name="default"]');
                }
            });
        },
        createControl: function(n, cm) {
            return null;
        },
    });

    tinymce.PluginManager.add('pop_cta', tinymce.plugins.pop_cta);
})();
