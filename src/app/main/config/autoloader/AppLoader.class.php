<?php

class AppLoader {
  /** @var array<string> $directories lista de diretórios */
  protected array $directories;

  /** registra o AppLoader */
  public function register() {
    spl_autoload_register(array($this, 'load_class'));
  }

  /**
  * adiciona a lista de diretórios
  * @param string $directory diretório
  */
  public function add_directory(string $directory) {
    $this->directories[] = $directory;
  }

  /**
  * inclui um arquivo
  * @param string $file nome do arquivo
  */
  public function load_class(string $file) {
    $folders = $this->directories;
    print $file;
    print '</br>';
    foreach ($folders as $folder) {
      $class_file_path = "{$folder}/{$file}.class.php";
      $interface_file_path = "{$folder}/{$file}.interface.php";

      if (file_exists($class_file_path)) {
        require_once $class_file_path;
        return true;
      } else if (file_exists($interface_file_path)) {
        require_once $interface_file_path;
        return true;
      } else {
        $recursive_directory = new RecursiveDirectoryIterator($folder);

        foreach (new RecursiveIteratorIterator($recursive_directory) as $entry) {
          $class_file_path = "{$entry}/{$file}.class.php";
          $interface_file_path = "{$entry}/{$file}.interface.php";

          if (is_dir($entry)) {
            if (file_exists($class_file_path)) {
              require_once $class_file_path;
              return true;
            } else if (file_exists($interface_file_path)) {
              require_once $interface_file_path;
              return true;
            }
          }
        }
      }
    }
  }
}

?>
