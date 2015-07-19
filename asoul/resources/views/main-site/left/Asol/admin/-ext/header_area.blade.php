
@section('head_add')
  {!! get_it("plugins/sweetAlert/sweetalert.css") !!}
  {!! get_it("plugins/sweetAlert/sweetalert-arabic.css") !!}
  {!! get_it("plugins/sweetAlert/sweetalert.min.js") !!}


	{!! get_it("plugins/wysiwyg.js/src/wysiwyg-editor.css") !!}
	{!! get_it("plugins/wysiwyg.js/src/wysiwyg.js") !!}
	{!! get_it("plugins/wysiwyg.js/src/wysiwyg-editor.js") !!}

	
<script type="text/javascript">
$(document).ready(function() {
    // Featured editor
    $('#editor1,#editor2,#editor3').each( function(index, element)
    {
        $(element).wysiwyg({
            classes: 'some-more-classes',
            // 'selection'|'top'|'top-selection'|'bottom'|'bottom-selection'
            // toolbar: index == 0 ? 'top-selection' : (index == 1 ? 'bottom' : 'selection'),
            toolbar: 'bottom-selection',
            buttons: {
                // Dummy-HTML-Plugin
                dummybutton1: index != 1 ? false : {
                    html: $('<input id="submit" type="button" value="bold" />').click(function() {
                                // We simply make 'bold'
                                if( $(element).wysiwyg('shell').getSelectedHTML() )
                                    $(element).wysiwyg('shell').bold();
                                else
                                    alert( 'Please selection some text' );
                            }),
                    showstatic: false,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                // Dummy-Button-Plugin
                dummybutton2: index != 1 ? false : {
                    title: 'Dummy',
                    image: '\uf1e7',
                    click: function( $button ) {
                            alert('haha! Do something');
                    },
                    showstatic: false,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                // Smiley plugin
                smilies: {
                    title: 'Smilies',
                    image: '\uf118', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_smilies = [
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/afraid.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/amorous.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/angel.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/angry.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/bored.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/cold.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/confused.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/cross.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/crying.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/devil.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/disappointed.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/dont-know.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/drool.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/embarrassed.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/excited.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/excruciating.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/eyeroll.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/happy.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/hot.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/hug-left.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/hug-right.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/hungry.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/invincible.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/kiss.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/lying.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/meeting.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/nerdy.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/neutral.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/party.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/pirate.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/pissed-off.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/question.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/sad.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/shame.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/shocked.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/shut-mouth.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/sick.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/silent.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/sleeping.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/sleepy.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/stressed.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/thinking.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/tongue.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/uhm-yeah.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/wink.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/working.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/bathing.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/beer.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/boy.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/camera.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/chilli.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/cigarette.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/cinema.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/coffee.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/girl.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/console.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/grumpy.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/in_love.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/internet.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/lamp.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/mobile.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/mrgreen.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/musical-note.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/music.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/phone.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/plate.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/restroom.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/rose.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/search.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/shopping.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/star.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/studying.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/suit.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/surfing.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/thunder.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/tv.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/typing.png') !!}" width="16" height="16" alt="" />',
                                    '<img src="{!! get_it('site-files/plugins/wysiwyg.js/smiley/writing.png') !!}" width="16" height="16" alt="" />'
                            ];
                            var $smilies = $('<div/>').addClass('wysiwyg-plugin-smilies')
                                                      .attr('unselectable','on');
                            $.each( list_smilies, function(index,smiley) {
                                if( index != 0 )
                                    $smilies.append(' ');
                                var $image = $(smiley).attr('unselectable','on');
                                // Append smiley
                                var imagehtml = ' '+$('<div/>').append($image.clone()).html()+' ';
                                $image
                                    .css({ cursor: 'pointer' })
                                    .click(function(event) {
                                        $(element).wysiwyg('shell').insertHTML(imagehtml); // .closePopup(); - do not close the popup
                                    })
                                    .appendTo( $smilies );
                            });
                            var $container = $(element).wysiwyg('container');
                            $smilies.css({ maxWidth: parseInt($container.width()*0.95)+'px' });
                            $popup.append( $smilies );
                            // Smilies do not close on click, so force the popup-position to cover the toolbar
                            var $toolbar = $button.parents( '.wysiwyg-toolbar' );
                            if( ! $toolbar.length ) // selection toolbar?
                                return ;
                            return { // this prevents applying default position
                                left: parseInt( ($toolbar.outerWidth() - $popup.outerWidth()) / 2 ),
                                top: $toolbar.hasClass('wysiwyg-toolbar-bottom') ? ($container.outerHeight() - parseInt($button.outerHeight()/4)) : (parseInt($button.outerHeight()/4) - $popup.height())
                            };
                           },
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                insertimage: {
                    title: 'Insert image',
                    image: '\uf030', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                insertvideo: {
                    title: 'Insert video',
                    image: '\uf03d', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                insertlink: {
                    title: 'Insert link',
                    image: '\uf08e', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                // Fontname plugin
                fontname: {
                    title: 'Font',
                    image: '\uf031', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_fontnames = {
                                    // Name : Font
                                    'Arial, Helvetica' : 'Arial,Helvetica',
                                    'Verdana'          : 'Verdana,Geneva',
                                    'Georgia'          : 'Georgia',
                                    'Courier New'      : 'Courier New,Courier',
                                    'Times New Roman'  : 'Times New Roman,Times'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontnames, function( name, font ) {
                                var $link = $('<a/>').attr('href','#')
                                                    .css( 'font-family', font )
                                                    .html( name )
                                                    .click(function(event) {
                                                        $(element).wysiwyg('shell').fontName(font).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           },
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                // Fontsize plugin
                fontsize: {
                    title: 'Size',
                    image: '\uf034', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            // Hack: http://stackoverflow.com/questions/5868295/document-execcommand-fontsize-in-pixels/5870603#5870603
                            var list_fontsizes = [];
                            for( var i=8; i <= 11; ++i )
                                list_fontsizes.push(i+'px');
                            for( var i=12; i <= 28; i+=2 )
                                list_fontsizes.push(i+'px');
                            list_fontsizes.push('36px');
                            list_fontsizes.push('48px');
                            list_fontsizes.push('72px');
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontsizes, function( index, size ) {
                                var $link = $('<a/>').attr('href','#')
                                                    .html( size )
                                                    .click(function(event) {
                                                        $(element).wysiwyg('shell').fontSize(7).closePopup();
                                                        $(element).wysiwyg('container')
                                                                .find('font[size=7]')
                                                                .removeAttr("size")
                                                                .css("font-size", size);
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           },
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                // Header plugin
                header: {
                    title: 'Header',
                    image: '\uf1dc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_headers = {
                                    // Name : Font
                                    'Header 1' : '<h1>',
                                    'Header 2' : '<h2>',
                                    'Header 3' : '<h3>',
                                    'Header 4' : '<h4>',
                                    'Header 5' : '<h5>',
                                    'Header 6' : '<h6>',
                                    'Code'     : '<pre>'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_headers, function( name, format ) {
                                var $link = $('<a/>').attr('href','#')
                                                     .css( 'font-family', format )
                                                     .html( name )
                                                     .click(function(event) {
                                                        $(element).wysiwyg('shell').format(format).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           },
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                bold: {
                    title: 'Bold (Ctrl+B)',
                    image: '\uf032', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'b',
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                italic: {
                    title: 'Italic (Ctrl+I)',
                    image: '\uf033', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'i',
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                underline: {
                    title: 'Underline (Ctrl+U)',
                    image: '\uf0cd', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'u',
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                strikethrough: {
                    title: 'Strikethrough (Ctrl+S)',
                    image: '\uf0cc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 's',
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                forecolor: {
                    title: 'Text color',
                    image: '\uf1fc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                highlight: {
                    title: 'Background color',
                    image: '\uf043', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                alignleft: {
                    title: 'Left',
                    image: '\uf036', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                aligncenter: {
                    title: 'Center',
                    image: '\uf037', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignright: {
                    title: 'Right',
                    image: '\uf038', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignjustify: {
                    title: 'Justify',
                    image: '\uf039', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                subscript: {
                    title: 'Subscript',
                    image: '\uf12c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                superscript: {
                    title: 'Superscript',
                    image: '\uf12b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                indent: {
                    title: 'Indent',
                    image: '\uf03c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                outdent: {
                    title: 'Outdent',
                    image: '\uf03b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                orderedList: {
                    title: 'Ordered list',
                    image: '\uf0cb', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                unorderedList: {
                    title: 'Unordered list',
                    image: '\uf0ca', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                removeformat: {
                    title: 'Remove format',
                    image: '\uf12d', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    showstatic: false,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                }
            },
            // Submit-Button
            submit: {
                title: 'Submit',
                image: '\uf00c', // <img src="path/to/image.png" width="16" height="16" alt="" />              
            },
            // Other properties
            selectImage: 'Click or drop image',
            placeholderUrl: 'www.example.com',
            placeholderEmbed: '<embed/>',
            maxImageSize: [600,200],
            onKeyDown: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                            // E.g.: submit form on enter-key:
                            //if( (key == 10 || key == 13) && !shiftKey && !altKey && !ctrlKey && !metaKey ) {
                            //    submit_form();
                            //    return false; // swallow enter
                            //}
                        },
            onKeyPress: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        },
            onKeyUp: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        },
            onAutocomplete: function( typed, key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                            if( typed.indexOf('@') == 0 ) // startswith '@'
                            {
                                var usernames = [
                                        'Evelyn',
                                        'Harry',
                                        'Amelia',
                                        'Oliver',
                                        'Isabelle',
                                        'Eddie',
                                        'Editha',
                                        'Jacob',
                                        'Emily',
                                        'George',
                                        'Edison'
                                    ];
                                var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                       .attr('unselectable','on');
                                $.each( usernames, function( index, username ) {
                                    if( username.toLowerCase().indexOf(typed.substring(1).toLowerCase()) !== 0 ) // don't count first character '@'
                                        return;
                                    var $link = $('<a/>').attr('href','#')
                                                        .text( username )
                                                        .click(function(event) {
                                                            var url = 'http://example.com/user/' + username,
                                                                html = '<a href="' + url + '">@' + username + '</a> ';
                                                            var editor = $(element).wysiwyg('shell');
                                                            // Expand selection and set inject HTML
                                                            editor.expandSelection( typed.length, 0 ).insertHTML( html );
                                                            editor.closePopup().getElement().focus();
                                                            // prevent link-href-#
                                                            event.stopPropagation();
                                                            event.preventDefault();
                                                            return false;
                                                        });
                                    $list.append( $link );
                                });
                                if( $list.children().length )
                                {
                                    if( key == 13 )
                                    {
                                        $list.children(':first').click();
                                        return false; // swallow enter
                                    }
                                    // Show popup
                                    else if( character || key == 8 )
                                        return $list;
                                }
                            }
                        },
            onImageUpload: function( insert_image ) {
                            // A bit tricky, because we can't easily upload a file via
                            // '$.ajax()' on a legacy browser without XMLHttpRequest2.
                            // You have to submit the form into an '<iframe/>' element.
                            // Call 'insert_image(url)' as soon as the file is online
                            // and the URL is available.
                            // Example server script (written in PHP):
                            <?php
                            /*
                            $upload = $_FILES['upload-filename'];
                            // Crucial: Forbid code files
                            $file_extension = pathinfo( $upload['name'], PATHINFO_EXTENSION );
                            if( $file_extension != 'jpeg' && $file_extension != 'jpg' && $file_extension != 'png' && $file_extension != 'gif' )
                                die("Wrong file extension.");
                            $filename = 'image-'.md5(microtime(true)).'.'.$file_extension;
                            $filepath = '/path/to/'.$filename;
                            $serverpath = 'http://domain.com/path/to/'.$filename;
                            move_uploaded_file( $upload['tmp_name'], $filepath );
                            echo $serverpath;
                            */
                            ?>
                            // Example client script (without upload-progressbar):
                            var iframe_name = 'legacy-uploader-' + Math.random().toString(36).substring(2);
                            $('<iframe>').attr('name',iframe_name)
                                         .load(function() {
                                            // <iframe> is ready - we will find the URL in the iframe-body
                                            var iframe = this;
                                            var iframedoc = iframe.contentDocument ? iframe.contentDocument :
                                                           (iframe.contentWindow ? iframe.contentWindow.document : iframe.document);
                                            var iframebody = iframedoc.getElementsByTagName('body')[0];
                                            var image_url = iframebody.innerHTML;
                                            insert_image( image_url );
                                            $(iframe).remove();
                                         })
                                         .appendTo(document.body);
                            var $input = $(this);
                            $input.attr('name','upload-filename')
                                  .parents('form')
                                  .attr('action','/script.php') // accessing cross domain <iframes> could be difficult
                                  .attr('method','POST')
                                  .attr('enctype','multipart/form-data')
                                  .attr('target',iframe_name)
                                  .submit();
                        },
            forceImageUpload: false,    // upload images even if File-API is present
            videoFromUrl: function( url ) {
                // Contributions are welcome :-)

                // youtube - http://stackoverflow.com/questions/3392993/php-regex-to-get-youtube-video-id
                var youtube_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?(?:youtu\.be|youtube\.com)\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/)([^\?&\"'>]+)/ );
                if( youtube_match && youtube_match[1].length == 11 )
                    return '<iframe src="//www.youtube.com/embed/' + youtube_match[1] + '" width="640" height="360" frameborder="0" allowfullscreen></iframe>';

                // vimeo - http://embedresponsively.com/
                var vimeo_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?vimeo\.com\/([0-9]+)$/ );
                if( vimeo_match )
                    return '<iframe src="//player.vimeo.com/video/' + vimeo_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // dailymotion - http://embedresponsively.com/
                var dailymotion_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?dailymotion\.com\/video\/([0-9a-z]+)$/ );
                if( dailymotion_match )
                    return '<iframe src="//www.dailymotion.com/embed/video/' + dailymotion_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // undefined -> create '<video/>' tag
            }
        })
        .change(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'change' );
        })
        .focus(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'focus' );
        })
        .blur(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'blur' );
        });
    });


    // Raw editor
    var option = {
        element: 'editor0', // or: document.getElementById('editor0')
        onKeyPress: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: '+character+' key pressed' );
                    },
        onSelection: function( collapsed, rect, nodes, rightclick ) {
                        if( typeof console != 'undefined' && rect )
                            console.log( 'RAW: selection rect('+rect.left+','+rect.top+','+rect.width+','+rect.height+'), '+nodes.length+' nodes' );
                    },
        onPlaceholder: function( visible ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: placeholder ' + (visible ? 'visible' : 'hidden') );
                    }
    };
    var wysiwygeditor = wysiwyg( option );
    //wysiwygeditor.setHTML( '<html>' );
});
</script>
<style>
body {
    font-family: Arial,Verdana;
}
p {
    margin: 0;
    padding: 0;
}
.button {
    -moz-user-select: none;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/* CSS for the font-name + font-size plugin */
.wysiwyg-plugin-list {
    max-height: 16em;
    overflow: auto;
    overflow-x: hidden;
    overflow-y: scroll;
}
.wysiwyg-plugin-list a,
.wysiwyg-plugin-list a:link,
.wysiwyg-plugin-list a:visited {
    display: block;
    color: black;
    padding: 5px 10px;
    text-decoration: none;
    cursor: pointer;
}
.wysiwyg-plugin-list a:hover {
    color: HighlightText;
    background-color: Highlight;
}
/* CSS for the smiley plugin */
.wysiwyg-plugin-smilies {
    padding: 10px;
    text-align: center;
    white-space: normal;
}
.wysiwyg-plugin-smilies img {
    display: -moz-inline-stack; /* inline-block: http://blog.mozilla.org/webdev/2009/02/20/cross-browser-inline-block/ */
    display: inline-block;
    *display: inline;
}
</style>

@show