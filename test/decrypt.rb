const = 'abcdefghijklmnopqrstuvwxyz'
cipher = 'oephjizkxdawubnytvfglqsrcm'

encrypted = 'knlfgnb, sj koqj o yvnewju'
decrypted = ''

def decryptstring(const, cipher, encrypted)

	array_in = encrypted.split('')

	array_out = Array.new

	array_in.each do |character|

		# If character exists in string, proceed to decrypt.
		# Wer are not considering special characters, only letters are decrypted
		if cipher.include?(character)

			# Character has been found, we get its position in the cipher string
			pos = cipher.index(character)
			# Find value of given position in const string and push it into Out array
			array_out.push(const[pos,1])

		else

			# If not a letter, push the character into Out array
			array_out.push(character)
		end

	end

	# Return decrypted string
	return array_out.join('')
end

# prints given information
puts "const : '" + const + "'" 
puts "cipher : '" + cipher + "'" 
puts "encrypted message : '" + encrypted + "'" 
# prints the decrypted message
puts "decrypted message : '" + decryptstring(const,cipher,encrypted) + "'"