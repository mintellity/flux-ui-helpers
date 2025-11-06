<?php

namespace Tobiasn\FluxUIHelpers\Builders;

use Flux\Flux;

class FluxToast
{
    private string $type;

    private string $message;

    private ?string $heading;

    private int $duration = 2000;

    private string $position = 'top-end';

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function success(string $message, ?string $heading = null): FluxToast
    {
        $toast = new FluxToast('success');
        $toast->message = $message;
        $toast->heading = $heading;

        return $toast;
    }

    public static function warning(string $message, ?string $heading = null): FluxToast
    {
        $toast = new FluxToast('warning');
        $toast->message = $message;
        $toast->heading = $heading;

        return $toast;
    }

    public static function danger(string $message, ?string $heading = null): FluxToast
    {
        $toast = new FluxToast('danger');
        $toast->message = $message;
        $toast->heading = $heading;

        return $toast;
    }

    public function duration(int $duration): FluxToast
    {
        $this->duration = $duration;

        return $this;
    }

    public function position(string $position): FluxToast
    {
        $this->position = $position;

        return $this;
    }

    public function show(): void
    {
        session()->put(config('flux_ui_helpers.toast.session_key_name'), $this);
    }

    public function render(): void
    {
        Flux::toast(
            text: $this->message,
            heading: $this->heading ?? '',
            duration: $this->duration,
            variant: $this->type,
            position: $this->position,
        );
    }
}
