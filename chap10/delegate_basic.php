<?php
 class FileLogger {
  private DateTime $current;
  // 委譲先のオブジェクトをプロパティに保持
  private SplFileObject $file;
  public function __construct(string $logname) {
    $this->current = new DateTime();
    $this->file = new SplFileObject("{$logname}-{$this->current->format®
 ('Ymd')}.log", 'a');
  }
    // 必要に応じて処理を委譲
    public function fwrite(string $str) { 
        $this->file->fwrite("［{$this->current->format('Y/m/d')}］{$str}\n");
      }
     }
     $logger = new FileLogger('log');
     $logger->fwrite('HogeHoge Text');
     ?>