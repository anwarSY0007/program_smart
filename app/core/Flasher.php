<?php

class Flasher
{
    public static function setFlash($message, $type, $aksi)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'type' => $type,
            'aksi' => $aksi,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                         data kriteria
                        <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['aksi'] . '.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}
