(function(editor, components, i18n, element) {
    var el = element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;

    var InspectorControls = wp.editor.InspectorControls;
    var TextControl = wp.components.TextControl;
    var ServerSideRender = wp.components.ServerSideRender;
    var ToggleControl = wp.components.ToggleControl;
    var ColorPalette = wp.components.ColorPalette;
    // var SelectControl = wp.components.SelectControl;

    registerBlockType('getbutterfly/font-awesome', {
        title: 'Font Awesome Icon',
        description: 'A single Font Awesome icon block.',
        icon: 'star-filled',
        category: 'getbutterfly',
        attributes: {
            /**
            faAlign: {
                type: 'string',
                default: '',
            },
            /**/
            faClass: {
                type: 'string',
                default: '',
            },
            faColor: {
                type: 'string',
                default: '#000000',
            },
            fixedWidth: {
                type: 'boolean',
                default: false,
            },
        },

        edit: function (props) {
            var attributes = props.attributes;

            // var faAlign = attributes.faAlign;
            var faClass = attributes.faClass;
            var faColor = attributes.faColor;
            var fixedWidth = attributes.fixedWidth;

            return [
                el(InspectorControls, { key: 'inspector' },
                    el(
                        components.PanelBody, {
                            title: 'Slider Settings',
                            className: 'supernova_block',
                            initialOpen: true,
                        },

                        el(TextControl, {
                            type: 'string',
                            label: 'Icon Class',
                            placeholder:  i18n.__('fas fa-sync-alt'),
                            help: i18n.__('Icon class, including fixed width or animations.'),
                            value: faClass,
                            onChange: function (new_faClass) {
                                props.setAttributes({ faClass: new_faClass });
                            },
                        }),
                        el(ToggleControl, {
                            type: 'boolean',
                            label: 'Fixed Width',
                            help: 'Whether to use a fixed-width icon.',
                            checked: !!fixedWidth,
                            onChange: function (new_fixedWidth) {
                                props.setAttributes({ fixedWidth: new_fixedWidth });
                            },
                        }),
                        el(ColorPalette, {
                            type: 'string',
                            label: 'Icon Colour',
                            onChange: function (new_faColor) {
                                props.setAttributes({ faColor: new_faColor });
                            },
                        }),
                        /**
                        el(SelectControl, {
                            label: 'Icon Alignment',
                            value: faAlign,
                            options: [
                                {
                                    value: 'left',
                                    label: 'Left'
                                },
                                {
                                    value: 'center',
                                    label: 'Center'
                                },
                                {
                                    value: 'right',
                                    label: 'Right'
                                }
                            ],
                            onChange: function (new_faAlign) {
                                props.setAttributes({ faAlign: new_faAlign });
                            },
                        }),
                        /**/
                    ),
                ),
                el(ServerSideRender, {
                    block: 'getbutterfly/font-awesome',
                    attributes: props.attributes
                })
            ];
        },

        save: function () {
            return null;
        },
    });
})(
    window.wp.editor,
    window.wp.components,
    window.wp.i18n,
    window.wp.element,
);
