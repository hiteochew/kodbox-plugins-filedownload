kodReady.push(function() {
    Events.bind('explorer.kodApp.before', function(appList) {
        appList.push({
            name: "filedownload",
            title: "{{LNG['filedownload.meta.name']}}",
            icon: '{{pluginHost}}static/images/icon.png',
            ext: "{{config.fileExt}}",
            sort: "{{config.fileSort}}",
            callback: function(path,ext,name) {
                core.openFile('{{pluginApi}}', "{{config.openWith}}", _.toArray(arguments));
            }
        });
    });
});