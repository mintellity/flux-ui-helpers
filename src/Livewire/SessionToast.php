<?php

namespace Tobiasn\FluxUIHelpers\Livewire;

use Tobiasn\FluxUIHelpers\Builders\FluxToast;
use Livewire\Component;

class SessionToast extends Component
{
    public function booted()
    {
        $this->renderToast();
    }

    public function renderToast()
    {
        if (session()->has(config('flux_ui_helpers.toast.session_key_name')) && session(config('flux_ui_helpers.toast.session_key_name')) instanceof FluxToast) {
            /** @var FluxToast $toast */
            $toast = session(config('flux_ui_helpers.toast.session_key_name'));
            $toast->render();

            session()->forget(config('flux_ui_helpers.toast.session_key_name'));
        }
    }

    public function render()
    {
        return <<<'BLADE'
            <div></div>
        BLADE;
    }
}
