const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
        options: {
            // Safelist data-theme attribute so PurgeCSS doesn't purge it
            safelist: [
                /data-theme$/,
            ]
        }
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: [
            {
                // customize colors here
                'corporate-custom': {
                    'primary': '#7B92B2', //'#570df8',
                    'primary-focus': '#5C789D',
                    'primary-content': '#ffffff',
                    'secondary': '#0165A0',
                    'secondary-focus': '#23648a',
                    'secondary-content': '#ffffff',
                    'accent': '#37cdbe',
                    'accent-focus': '#2aa79b',
                    'accent-content': '#ffffff',
                    'neutral': '#3d4451',
                    'neutral-focus': '#2a2e37',
                    'neutral-content': '#ffffff',
                    'base-100': '#ffffff',
                    'base-200': '#f9fafb',
                    'base-300': '#d1d5db',
                    'base-content': '#47404f',
                    'info': '#2094f3',
                    'success': '#009485',
                    'warning': '#ff9900',
                    'error': '#ff5724',
                },
            },
        ],
    },

    variants: {
        extend: {
            opacity: ['disabled']
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
};
