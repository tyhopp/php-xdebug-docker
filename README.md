# Docker/WSL2/VSCode/XDebug breakpoint reproduction

If `"hostname": "0.0.0.0"` is not set in the VSCode launch configuration, breakpoints are not hit.

## Usage

1. Build with `docker build -t php-xdebug-docker .`
2. Run in interactive mode with `docker run -it -p 9003:9003 php-xdebug-docker /bin/bash`
3. Run XDebug launch script in VSCode that looks like this:

```json
{
  "version": "0.2.0",
  "configurations": [
    {
      "name": "Listen for Xdebug",
      "type": "php",
      "request": "launch",
      "port": 9003,
      "pathMappings": {
        "/tmp": "${workspaceFolder}"
      },
      "log": true
    }
  ]
}
```

4. Set a breakpoint in `index.php`
5. From the bash terminal in the container, execute the PHP script with `php /tmp/index.php`
6. See that breakpoints set in `index.php` are not hit