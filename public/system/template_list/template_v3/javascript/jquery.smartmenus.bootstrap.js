!function(s){s(function(){s("ul.navbar-nav").each(function(){var a=s(this);a.addClass("sm").smartmenus({subMenusSubOffsetX:2,subMenusSubOffsetY:-6,subIndicatorsPos:"append",subIndicatorsText:"...",collapsibleShowFunction:null,collapsibleHideFunction:null,rightToLeftSubMenus:a.hasClass("navbar-right"),bottomToTopSubMenus:a.closest(".navbar").hasClass("navbar-fixed-bottom")}).find("a.current").parent().addClass("active")}).bind({"show.smapi":function(a,n){var t=s(n),e=t.dataSM("scroll-arrows"),i=s(this).data("smartmenus");e&&e.css("background-color",s(document.body).css("background-color")),t.parent().addClass("open"+(i.isCollapsible()?" collapsible":""))},"hide.smapi":function(a,n){s(n).parent().removeClass("open collapsible")},"click.smapi":function(a,n){var t=s(this).data("smartmenus");if(t.isCollapsible()){var e=s(n),i=e.parent().dataSM("sub");if(i&&i.dataSM("shown-before")&&i.is(":visible"))return t.itemActivate(e),t.menuHide(i),!1}}})}),s.SmartMenus.prototype.isCollapsible=function(){return"table-cell"!=this.$firstLink.parent().css("display")}}(jQuery);