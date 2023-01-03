import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: { overlay: false }
        },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
        // {
        //     name: 'blade',
        //     handleHotUpdate({ file, server }) {
        //         if (file.endsWith('.blade.php')) {
        //             server.ws.send({
        //                 type: 'full-reload',
        //                 path: '*',
                        
        //             });
        //         }
        //     },
        // }
        
        
    ],
    
    
      
    
});
