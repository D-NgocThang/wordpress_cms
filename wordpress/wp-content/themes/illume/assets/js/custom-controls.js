(function(api) {

    api.sectionConstructor['illume-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });
  
    const journeytourismsection_lists = ['banner', 'service'];
    journeytourism_section_lists.forEach(journeytourism_homepage_scroll);
  
    function journeytourism_homepage_scroll(item) {
        item = item.replace(/-/g, '');
        wp.customize.section('illume_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
  })(wp.customize);