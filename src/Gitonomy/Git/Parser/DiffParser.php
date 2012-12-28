use Gitonomy\Git\Repository;
    protected $repository;

    public function setRepository(Repository $repository)
    {
        $this->repository = $repository;
    }
        if (null === $this->repository) {
            throw new \RuntimeException('Can\'t work without Repository');
        }

            $oldName  = $vars[1];
            $newName  = $vars[2];
            $oldIndex = null;
            $newIndex = null;
            $oldMode  = null;
            $newMode  = null;
                list($oldIndex) = $this->consumeRegexp('/[A-Za-z0-9]{7,40}/');
                $this->consume('..');
                list($newIndex) = $this->consumeRegexp('/[A-Za-z0-9]{7,40}/');
            $oldName  = $oldName === '/dev/null' ? null : substr($oldName, 2);
            $newName  = $newName === '/dev/null' ? null : substr($newName, 2);
            $oldIndex = preg_match('/^0+$/', $oldIndex) ? null : $oldIndex;
            $newIndex = preg_match('/^0+$/', $newIndex) ? null : $newIndex;
            $file = new File($this->repository, $oldName, $newName, $oldMode, $newMode, $oldIndex, $newIndex, $isBinary);
                $vars = $this->consumeRegexp('/-(\d+)(?:,(\d+))? \+(\d+)(?:,(\d+))?/');